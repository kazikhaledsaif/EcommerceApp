<?php

namespace App\Http\Controllers\Backend;

use App\Product;
use App\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $review = Review::join('products','reviews.pid','=','products.id')
            ->join('users','reviews.uid','=','users.id')
            ->select('reviews.id','products.name as productName','slug','users.first_name as fName','users.last_name as lName', 'reviews.rating as rating' ,
                'products.rating as overallRating','comment','email','reviews.created_at as created_at')
            ->get();
//    dump($review);
        return view('backend.pages.review.index')->with(['reviews' => $review]);
    }




    public function show($id)
    {


        $review = Review::join('products','reviews.pid','=','products.id')
            ->join('users','reviews.uid','=','users.id')
            ->where('reviews.id', $id)
            ->select('reviews.id as id','products.name as productName','slug','users.first_name as fName','users.last_name as lName', 'reviews.rating as rating' ,
                'products.rating as overallRating','comment','email','phone','product_image as productImage',
                'reviews.created_at as created_at', 'users.created_at as regDate')
            ->first();
//    dump($review);
        return view('backend.pages.review.show')->with(['review' => $review]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Request $request)
    {

        $rev = Review::find($request->id);

        $review_count = Review::where('pid', $rev->pid)->count();
        $review_sum = Review::where('pid', $rev->pid)->sum('rating');
        $rating = $review_sum / $review_count ;

        $product = Product::find($rev->pid);
        $product->rating = $rating;

        $product->save();

        Review::find($request->id)->delete();
    return redirect()->back();
//
//        return redirect()->route('backend.reviews.list');
    }
}
