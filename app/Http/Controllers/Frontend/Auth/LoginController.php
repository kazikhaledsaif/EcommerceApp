<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{


    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect()->route('frontend.login');
    }

    public function showUserLoginForm()
    {
        if (Auth::guard("user")->check())
        {
            return redirect('/');

        }
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
