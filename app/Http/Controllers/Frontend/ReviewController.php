<?php

namespace App\Http\Controllers\Frontend;

use App\Product;
use App\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MercurySeries\Flashy\Flashy;

class ReviewController extends Controller
{

    public function store(Request $request) {

        $review = new Review();

        $review->pid = $request->pid;
        $review->uid = $request->uid;
        $review->rating = $request->rating;
        $review->comment = $request->comment;

        $review->save();

        $review_count = Review::where('pid', $request->pid)->count();
        $review_sum = Review::where('pid', $request->pid)->sum('rating');
        $rating = $review_sum / $review_count ;

        $product = Product::find($request->pid);
        $product->rating = $rating;

        $product->save();


        Flashy::success('Review added.');

        return redirect()->back();

    }


    public function show($id)
    {
//        $review = Review::find($id);
        $review = Review::join('users','reviews.uid', '=','users.id')->where('pid',$id);

        return $review;
    }


    public function edit(Review $review) {

    }


    public function update(Request $request) {
        $review = Review::find($request->id);

        $review->rating = $request->rating;
        $review->comment= $request->comment;

        $review->save();

        Flashy::success('Review updated.');

        return redirect()->back();

    }


    public function destroy(Review $review)
    {
        //
    }
}
