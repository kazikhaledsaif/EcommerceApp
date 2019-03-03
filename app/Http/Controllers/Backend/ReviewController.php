<?php

namespace App\Http\Controllers\Backend;


use App\Product;
use App\Review;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Spatie\Permission\Traits\HasRoles;

class ReviewController extends Controller
{
    use HasRoles;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


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


        Flashy::success(' Review added.');

        return redirect()->route('frontend.shop');

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

        Flashy::success(' Review updated.');

        return redirect()->back();

    }


    public function destroy(Review $review)
    {
        //
    }
}
