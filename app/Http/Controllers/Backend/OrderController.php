<?php

namespace App\Http\Controllers\Backend;

use App\Order;
use App\OrderProduct;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MercurySeries\Flashy\Flashy;

class OrderController extends Controller
{

    public function index() {

        $orders = Order::orderBy('id','DESC')->get();

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


        $pdf = PDF::loadView('backend.pages.order.invoice', [
            'order' => $order,
            'products' => $products
        ]);
        return $pdf->stream('invoice.pdf');
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
        $order = Order::find($request->id);

        $order->status = $request->status;
        $order->billing_address = $request->address;
        $order->billing_town = $request->town;
        $order->billing_phone_no = $request->number;

        $order->save();

        Flashy::success('Order update successful', '');
        return redirect()->route('backend.order.list');

    }


    public function destroy($id)
    {
        //
    }
}
