<?php

namespace App\Http\Controllers\Frontend;

use App\Order;
use App\OrderIndex;
use App\OrderProduct;
use App\Product;
use Barryvdh\DomPDF\PDF;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{

    public function index(){
        return view('frontend.pages.checkout');
    }
    public function store (Request $request){

        // dd($request->all());

        try {
            $charge = Stripe::charges()->create([
                'amount' => Cart::instance('default')->subtotal(null,null,''),
                'currency' => 'USD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    //  'contents' => $contents,
                    // 'quantity' => Cart::instance('default')->count(),
                    //  'discount' => collect(session()->get('coupon'))->toJson(),
                ],
            ]);



            //insert in to order table
            $order = Order::create(
                [
                    'user_id' => auth()->user() ? auth()->user()->id : null,
                    'billing_email' => $request->email,
                    'billing_first_name'=> $request->fname,
                    'billing_last_name'=> $request->lname,
                    'billing_phone_no'=> $request->number,
                    'billing_address'=> $request->address,
                    'billing_town'=> $request->state,
                    'billing_city'=> $request->city,
                    'billing_zip_code'=> $request->postcode,
                    'billing_discount'=> $request->cupon_amount,
                    'status' => 'Pending',
                    'billing_id' => $charge['id'],
                    'billing_discount_code'=> $request->cupon_name,
                    'billing_subtotal'=> Cart::instance('default')->subtotal(null,null,''),
                    'billing_shipping_fee'=> 0,
                    'billing_total'=> $request->total,

                ]
            );
            // Insert into order_product table
            foreach (Cart::instance('default')->content() as $item) {
                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $item->model->id,
                    'quantity' => $item->qty,
                ]);
                $product = Product::find($item->model->id);
                $product->stock = $product->stock - $item->qty;
                $product->save();
            }

            $oid = $order->id;
            $ocode = substr(md5('muaj'.$oid.'saif'), 0, 15);
            $otracker = substr(md5('muaj'.$oid.'saif'), 16, 31);
            $user = auth()->user() ? auth()->user()->id : 'guest';

            $ordered_now = OrderIndex::create([
                'user_id' => $user,
                'order_no' => $oid,
                'order_code' => $ocode,
                'tracker' => $otracker
            ]);


            $uid = auth()->user() ? auth()->user()->id : 0;
            $ocode = 'FVT'. substr(md5('muaj'.$order->id.'saif'), 0, 12) ;
            $var = DB::table("Insert into `order_index`(`user`,`order_no`,`order_code`) values('$uid','$order->id','$ocode')");


            Cart::instance('default')->destroy();

            $mData = array(
                'name' => $request->fname,
                'email' => $request->email,
                'link' => "https://furniturevilletexas.com/invoice/".$otracker
                // 'link' => "127.0.0.1/invoice/".$otracker
            );

          /*  return redirect()->route('send')
                ->with('maildata' , $mData);*/

        } catch (CardErrorException $e) {

            return back()->withErrors('Error! ' . $e->getMessage());
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
