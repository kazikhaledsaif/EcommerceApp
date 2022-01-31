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


        if (strlen($request->number) == 11){
//            if($request->status == "Processing"){
//                $to= "88".$request->number;
//                $message = "Your DOOZO Order.......(".$order->id.") has been Received. Thanks.";
//                $return = json_decode( $this->sendSMS($to,$message ));
//
//                Flashy::success('Order update to '. $request->status .' SMS sent to : '.$to." Status : " .$return->message );
//            }
            if($request->status == "Cancelled"){
                $to= "88".$request->number;
                $message = "Your DOOZO Order.......(".$order->id.") has been Canceled, to know details please check on your app.";
                $return = json_decode( $this->sendSMS($to,$message ));

                Flashy::success('Order update to '. $request->status .' SMS sent to : '.$to." Status : " .$return->message );
            }
            if($request->status == "Shipped"){
                $to= "88".$request->number;
                $message = "Your DOOZO Order.......(".$order->id.") has been Shipped. Thanks.";
                $return = json_decode( $this->sendSMS($to,$message ));

                Flashy::success('Order update to '. $request->status .' SMS sent to : '.$to." Status : " .$return->message );
            }
            if($request->status == "Delivered"){
                $to= "88".$request->number;
                $message = "Your DOOZO Order.......(".$order->id.") has been Delivered. Thanks for Choosing DOOZO.";
                $return = json_decode( $this->sendSMS($to,$message ));

                Flashy::success('Order update to '. $request->status .' SMS sent to : '.$to." Status : " .$return->message );
            }
        }




       // Flashy::success('Order update to '. $request->status .' successful');
        return redirect()->route('backend.order.list');

    }


    public function destroy($id)
    {
        //
    }
    public function sendSMS($to, $message)
    {
        $curl = curl_init();
        $data =[
            "username"=> env('SMS_USERNAME'),
            "password"=>env('SMS_PASSWORD'),
            "sender"=> env('SMS_SENDER'),
            "message"=>$message,
            "to"=>$to
        ];
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://api.icombd.com/api/v2/sendsms/plaintext",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
          return $err;
        } else {
            return $response;
        }
    }

}
