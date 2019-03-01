<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
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

        Flashy::success(' Review added.');

        return redirect()->back();

    }


    public function show(Review $review)
    {
        //
    }


    public function edit(Review $review) {

    }


    public function update(Request $request) {
        $review = Review::find($request->id);

        $review->rating = $request->rating;
        $review->comment= $request->comment;

        $review->save();

        Flashy::success(' Product '. $request->productName.' created.');

    }


    public function destroy(Review $review)
    {
        //
    }
}
