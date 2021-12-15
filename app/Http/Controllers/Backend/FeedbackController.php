<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Feedback;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MercurySeries\Flashy\Flashy;

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

    public function userList(){

        $user = User::all();

        return view('backend.pages.user')->with([
            'user' => $user
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

    public function userShow($id) {

        $user = User::find($id);
        $role= $user->removeRole('user');
        $role1= $user->assignRole('admin');
        redirect()->back();

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
    public function destroy(Request $request) {
        Feedback::find($request->id)->delete();

        Flashy::error('Feedback deleted');
        return redirect()->route('backend.feedback.list');

    }
}
