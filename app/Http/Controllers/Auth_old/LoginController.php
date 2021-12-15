<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    protected function authenticated($request, $user){
//        if($user->role('admin')){
//            return redirect('/admin');
//        } else {
//            return redirect('/');
//        }
//    }

    public function __construct()
    {



    }
    public function showAdminLoginForm()
    {
        return view('backend.pages.login');
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admin');
        }
        $errors = new MessageBag(['password' => ['Email and/or password invalid.']]);
        return Redirect::back()->withErrors($errors)->withInput(Input::except('password'));
    }

    public function showUserLoginForm()
    {

        return view('frontend.pages.login');
    }

    public function userLogin(Request $request)
    {

        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {


            return redirect()->intended('/');
        }
        $errors = new MessageBag(['password' => ['Email and/or password invalid.']]);
        return Redirect::back()->withErrors($errors)->withInput(Input::except('password'));
    }



}
