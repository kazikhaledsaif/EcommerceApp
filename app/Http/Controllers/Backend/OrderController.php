<?php

namespace App\Http\Controllers\Backend;

use App\CancelReason;
use App\Order;
use App\OrderProduct;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use MercurySeries\Flashy\Flashy;

class OrderController extends Controller
{

    public function index(Request $request ){

//        $orders = Order::orderBy('id', 'asc')->get();
//
//        return view('backend.pages.order.list')->with([
//            'orders' => $orders
//        ]);
        $orders = Order::where( function($query) use($request){
            return $request->status ?
                $query->from('status')->where('status',$request->status) : '';
        })->orderBy('created_at', 'asc')->get();

        //return $orders;
        return view('backend.pages.order.list')->with([
            'orders' => $orders
        ]);
    }

    public function filter(Request $request) {

        $orders = Order::where( function($query) use($request){
            return $request->status ?
                $query->from('status')->where('status',$request->status) : '';
        })->orderBy('id', 'asc')->get();

        return view('backend.pages.order.list')->with([
            'orders' => $orders
        ]);
    }
    public function create()
    {
        //
    }


    public function pdf($id) {
        $order = Order::find($id);
        $products = OrderProduct::select('order_products.quantity as amount', 'products.name as productName',
            'products.slug as slug','order_products.price as rate')
            ->join('products','order_products.product_id','=','products.id')
            ->where('order_products.order_id', $id)
            ->get();

        $invoice = substr(md5('muaj'.$id.'saif'), 0, 15) ;
        $invoice = $invoice.'.pdf';
        $pdf = PDF::loadView('backend.pages.order.invoice', [
            'order' => $order,
            'products' => $products
        ]);

        return $pdf->stream('invoice_'.$invoice);
    }


    public function show($id) {

        $order = Order::find($id);

        $products = OrderProduct::select('order_products.quantity as amount', 'products.name as productName',
            'products.slug as slug','order_products.price as rate')
            ->join('products','order_products.product_id','=','products.id')
            ->where('order_products.order_id', $id)
            ->get();

        return view('backend.pages.order.show')->with([
            'order' => $order,
            'products' =>$products
        ]);
    }


    public function edit($id) {


        $order = Order::find($id);

        return view('backend.pages.order.edit')->with([
            'order' => $order
        ]);
    }

    public function update(Request $request)
    {

        $rules = [
            'status' => 'required',
            'town' => 'required',
            'city' => 'required',
            'address' => 'required',
            'email' => 'required',
            'number' => 'required',
            'reason' => 'required_if:status,Cancelled',

        ];

        $customMessages = [
        'reason.required_if' => 'You need to give a reason for canceling the order!'
        ];
        $this->validate($request, $rules, $customMessages);


        $order = Order::find($request->id);

        $order->status = $request->status;
        $order->billing_address = $request->address;
        $order->billing_town = $request->town;
        $order->billing_city = $request->city;
        $order->billing_zip_code = $request->zip;
        $order->billing_email = $request->email;
        $order->billing_phone_no = $request->number;
        if ( $request->status == "Cancelled"){
            $reason =  CancelReason::updateOrCreate(
                ['admin_id' =>  auth()->guard('admin')->user()->id],
                ['order_id' => $request->id]
            );
            $reason->order_id = $request->id;
            $reason->admin_id =  auth()->guard('admin')->user()->id;
            $reason->reasons =  $request->reason;
            $reason->save();
        }


        $order->save();

        Flashy::success('Order update to '. $request->status .' successful');
        return redirect()->route('backend.order.list');

    }


    public function destroy($id)
    {
        //
    }
}
