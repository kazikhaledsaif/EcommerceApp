<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
//        if (! $request->expectsJson()) {
//            return route('frontend.login');
//        }

//
//        if (! $request->expectsJson()) {
//
////            if($request->routeIs('admin/*')){
////                return route('backend.login');
////            }
//           // return route('frontend.login');
//        }

        if ($request->routeIs('backend.*') ) {

            if (!$request->expectsJson()) {
                return route('backend.login');
            }

        } else {
            if (!$request->expectsJson()) {
                return route('frontend.login');
            }
        }
    }
}
