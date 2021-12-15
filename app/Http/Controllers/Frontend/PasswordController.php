<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use MercurySeries\Flashy\Flashy;


class PasswordController extends Controller
{
    //


    public function index()
    {
        return view('frontend.pages.password-update');
    }


    public function update(Request $request){

        $uid = Auth()->guard('user')->user()->id;
        $user = User::find($uid);


        if(Hash::check($request->passwordold, $user['password']) ){
            if($request->passwordnew == $request->passwordconfirm){
                $user->password = bcrypt($request->passwordnew);
                $user->save();
                Flashy::success('Password update successfully.');
                return redirect()->route('frontend.my-account')->with('success_message','Password update successfully');

            }else{
                Flashy::error('Confirm password doesn\'t match.');
                return redirect()->back()->with('error_massage','Confirm password doesn\'t match');
            }
        }
        else{
            Flashy::error('Wrong password!');
            return redirect()->back()->with('error_massage','Wrong password!');
        }

    }


    public function showForgetPasswordForm()
    {
        return view('frontend.pages.password-reset-email');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('email.forgetPassword', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        Flashy::success('We have e-mailed your password reset link!!');
        return redirect()->route('frontend.index')->with('message', 'We have e-mailed your password reset link!');
    }
    /**
     * Write code on Method
     *
     * @return response|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function showResetPasswordForm($token) {
        return view('frontend.pages.password-reset-link', ['token' => $token]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();

        if(!$updatePassword){
            Flashy::error('Invalid token!!!!');
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email'=> $request->email])->delete();

        Flashy::success('Your password has been changed!');

        return redirect()->route('frontend.login')->with('message', 'Your password has been changed!');
    }


}
