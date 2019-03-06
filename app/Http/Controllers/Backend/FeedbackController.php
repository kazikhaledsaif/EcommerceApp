<?php

namespace App\Http\Controllers\Backend;

use App\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $feedback = Feedback::all();

        return view('backend.pages.feedback.list')
            ->with([
                'feedback' => $feedback
        ]);
    }



    public function store(Request $request)
    {
        //
    }


    public function show($id) {

        $feedback = Feedback::find($id);

        return view('backend.pages.feedback.show')
                ->with([
                   'feedback' => $feedback
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
