<?php

namespace App\Http\Controllers\Backend;

use App\Order;
use App\OrderProduct;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
