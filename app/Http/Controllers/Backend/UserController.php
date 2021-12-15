<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Product;
use App\User;
use Cviebrock\EloquentSluggable\Services\SlugService;

use Illuminate\Support\Facades\Validator;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use MercurySeries\Flashy\Flashy;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $users = User::all('id','first_name','last_name','email','phone','address');
        return view('backend.pages.user.list')->with([
            'users' => $users
        ]);

    }




    public function edit($id) {

        $user = User::where('id',$id)->firstOrFail();


        return view('backend.pages.user.edit')->with([
            'user' => $user
        ]);
    }


    public function update(Request $request) {
        $user = User::find($request->id);
        $request->validate([
            'email' => 'required|email|unique:users,email,'.$user->id,
        ]);
        $user->first_name = $request->first_name;
        $user->email  = $request->email ;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->zip = $request->zip;
        $user->save();

        Flashy::success(' User '. $request->first_name.' updated.');
         return back();

    }


    public function destroy(Request $request) {
        User::find($request->id)->delete();


        return redirect()->route('backend.user.list');

    }
}
