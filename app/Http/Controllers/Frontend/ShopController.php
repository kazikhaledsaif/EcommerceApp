<?php

namespace App\Http\Controllers\Frontend;

use App\Product;
use App\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $products = Product::all();

        return view('frontend.pages.shop')->with([
            'products'=>$products

        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $product = Product::where('slug',$slug)->firstOrFail();

//        $review = Review::where('pid', $product->id)->get();
        $review = Review::join('users','reviews.uid', '=','users.id')->where('pid', $product->id)->get();

         $review_count = Review::where('pid', $product->id)->count();
       // $review_sum = Review::where('pid', $product->id)->sum('rating');


        $mightLikeProduct = Product::where('slug','!=',$slug)->inRandomOrder()->take(8)->get();
        return view('frontend.pages.product')->with([
                'product'=> $product,
                'review_count' => $review_count,
                'review' => $review,
           //     'review_sum'=>$review_sum,
                'mightLikeProduct' => $mightLikeProduct
            ]

        );
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
