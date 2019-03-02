<?php

namespace App\Http\Controllers\Frontend;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.pages.cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::find($request->id);
        $rows = Cart::instance('default')->content();
        if(count($rows) > 0){


            $rowId = $rows->first()->rowId;
            if (Cart::instance('default')->content()[ $rowId ]->qty >= $product->stock){
                return back()->with('error_massage','Sorry ! You cannot add more than available quantity');
            }

            else {

                Cart::instance('default')->add($request->id, $request->name, $request->quantity, $request->price)->associate('App\Product');
                return back()->with('success_message', 'Item was added to your cart!');
            }
        }else {


            if ($request->quantity > $product->stock) {
                return back()->with('error_massage', 'Sorry ! You cannot add more than available quantity');
            } else {

                Cart::instance('default')->add($request->id, $request->name, $request->quantity, $request->price)->associate('App\Product');
                return back()->with('success_message', 'Item was added to your cart!');
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        Cart::instance('default')->update($id,$request->quantity);
        return redirect()->route('cart.index')->with('alert_massage','Item is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        Cart::instance('default')->remove($rowId);
        return back()->with('error_massage','Item has been removed!');
        // return redirect()->route('cart.index')->with('success_message','Item was added to your cart!');

    }


}
