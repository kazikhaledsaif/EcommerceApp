<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PasswordController extends Controller
{
    //


    public function index()
    {
        return view('auth.passwords.update');
    }

    public function update(Request $request){

        $uid = Auth()->user()->id;
        $user = User::find($uid);


        if(Hash::check($request->passwordold, $user['password']) ){
            if($request->passwordnew == $request->passwordconfirm){
                $user->password = bcrypt($request->passwordnew);
                $user->save();
                return redirect('frontend.my-account')->with('success_message','Password update successfully');

            }else{
                return redirect()->back()->with('error_massage','Confirm password doesn\'t match');
            }
        }
        else{
            return redirect()->back()->with('error_massage','Wrong password!');
        }

    }



}
