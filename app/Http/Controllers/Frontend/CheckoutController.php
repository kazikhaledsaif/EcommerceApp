<?php

namespace App\Http\Controllers\Frontend;

use App\Order;
use App\OrderIndex;
use App\OrderProduct;
use App\Product;
use App\Setting;
use App\User;
use Barryvdh\DomPDF\PDF;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use MercurySeries\Flashy\Flashy;

class CheckoutController extends Controller
{

    public function index(){
        $settings = Setting::latest('updated_at')->first();
        return view('frontend.pages.checkout')
            ->with([
                'settings' => $settings
            ]);

    }
    public function store (Request $request){

        if (Cart::count() < 1){
            Flashy::error("No product is in cart" );

            return back() ;
        }
        if ($request->total < 0){
            Flashy::error("Please try again" );
            Cart::instance('default')->destroy();
            session()->forget('coupon');
            return back();
        }

        try {
            $user = User::find(auth()->guard('user')->user()->id);

            $user->first_name = $request->fname;
            $user->email  = $request->email ;
            $user->last_name = $request->lname;
            $user->phone = $request->number;
            $user->address = $request->address;
            $user->city = $request->city;
            $user->state = $request->state;
            $user->zip = $request->postcode;
            $user->save();


            $itemFinished = false;
            foreach (Cart::instance('default')->content() as $item) {
                $product = Product::find($item->model->id);

                if($product->stock  < 1  or $product->stock < $item->qty){
                    Cart::instance('default')->remove($item->rowId);
                    $itemFinished = true;
                }

            }


            if ($itemFinished){
                Flashy::error("Sorry! Some product has been removed from your cart because it can no longer be purchased " );

                return back() ;
            }




            //insert in to order table
            $order = Order::create(
                [
                    'user_id' =>   auth()->guard('user')->user()->id,
                    'billing_email' => $request->email,
                    'billing_first_name'=> $request->fname,
                    'billing_last_name'=> $request->lname,
                    'billing_phone_no'=> $request->number,
                    'billing_address'=> $request->address,
                    'billing_town'=> $request->state,
                    'billing_city'=> $request->city,
                    'billing_zip_code'=> $request->postcode,
                    'billing_discount'=> $request->cupon_amount,
                    'status' => 'Received',
                    'billing_discount_code'=> $request->cupon_name,
                    'billing_subtotal'=> Cart::instance('default')->subtotal(null,null,''),
                    'billing_shipping_fee'=> Setting::latest('updated_at')->first() ? Setting::latest('updated_at')->first()->delivery_cost: 0,
                    'billing_payment_gateway'=> " Pay on Delivery",
                    'billing_total'=> $request->total,

                ]
            );
            // Insert into order_product table
            foreach (Cart::instance('default')->content() as $item) {
                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $item->model->id,
                    'quantity' => $item->qty,
                    'price' => $item->price,

                ]);
                $product = Product::find($item->model->id);
                $product->stock = $product->stock - $item->qty;
                $product->save();
            }


            $otracker = substr(md5('virtual'. $order->id.'echos'), 16, 31);
            $user = auth()->guard('user')->user()->id;

            $ordered_now = OrderIndex::create([
                'user_id' => $user,
                'order_no' => $order->id,
                'tracker' => $otracker
            ]);


            if (strlen($request->number) == 11){

                    $to= "88".$request->number;
                    $message = "Your DOOZO Order.......(".$order->id.") has been Received. Thanks.";
                     $this->sendSMS($to,$message );

            }

            Cart::instance('default')->destroy();
            session()->forget('coupon');

            Flashy::success("Thank you for your order" );
            return view('frontend.pages.thank-you')
                ->with([
                    'tracking' => $otracker
                ]);


        } catch (\Exception $e) {

            return back()->withErrors('Error! ' . $e->getMessage());
        }

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
    public function getPdf(Request $request, $id){
        $order = Order::find($id);
        // $products = $order->products();
        // $product_list = DB::table('order_products')->where('order_id', $order->id)->get();
        $product_list = DB::table('order_products')
            ->join('products','order_products.product_id','=', 'products.id')
            ->where('order_products.order_id', $id)
            ->get();
        $invoice = md5('fvt'.$id);
        $invoice = $invoice.'.pdf';

        $pdf = PDF::loadView('frontend.pages.invoicepdf', [
            'order' => $order,
            'id' => $id,
            'product_list' =>$product_list
        ]);

        return $pdf->stream('invoice_'.$invoice);

    }
}
