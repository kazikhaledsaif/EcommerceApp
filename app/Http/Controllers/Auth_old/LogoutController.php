<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }


    public function userLogout(Request $request)
    {
        Auth::guard('user')->logout();
        return redirect('/');
    }
    public function adminLogout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
