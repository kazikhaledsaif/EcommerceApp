<?php

namespace App\Http\Controllers\Backend;

use App\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MercurySeries\Flashy\Flashy;

class CouponController extends Controller
{

    public function index()
    {
        $coupon = Coupon::all();
        return view('backend.pages.coupon.list')->with('coupons',$coupon);
    }

    public function new()
    {
        $coupon = Coupon::all();
        return view('backend.pages.coupon.add')->with('coupons',$coupon);


    }
    public function create(Request $request) {

        $coupon = new Coupon();

        $coupon->code = $request->couponCode;
        $coupon->type = $request->couponType;
        $coupon->value = $request->couponValue;
        $coupon->percent_off = $request->couponPercentage;
        $coupon->expire = $request->couponExpireDate;

        $coupon->save();

        Flashy::success(' New Coupon '. $request->couponCode.' created.');
        return redirect()->back();

    }


    public function store(Request $request)
    {
        $code = Coupon::where('code', $request->coupon_code)->first();

        if(!$code){
            return redirect()->route('cart.index')->with('success_message', 'Invalid coupon !');
        }
        session()->put('coupon', [
            'name' => $code->code,
            'amount' =>$code->discount(Cart::subtotal())
        ]);
        return redirect()->route('cart.index')->with('success_message', 'coupon Applied ');
    }


    public function show($id) {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy()
    {
        session()->forget('coupon');
        return back()->with('success_message', 'coupon has been removed.');
    }
}
