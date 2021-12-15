<?php

namespace App\Http\Controllers\Backend;

use App\Coupon;
use App\FeaturedCategory;
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
        $rules = [
            'code' => 'required|unique:coupons',
            'couponType' => 'required'
        ];

        $customMessages = [
//            'name.required' => 'Yo, what should I call you?',
//            'email.required' => 'We need your email address also',
        ];
        $this->validate($request, $rules, $customMessages);
        $coupon = new Coupon();

        $coupon->code = $request->code;
        $coupon->type = $request->couponType;
        $coupon->value = $request->couponValue;
        $coupon->percent_off = $request->couponPercentage;
        $coupon->expire = $request->couponExpireDate;
        $coupon->per_user_limit = $request->couponUserLimit;
        $coupon->max_limit = $request->couponMaxLimit;
        $coupon->minimum_amount = $request->minimum_amount;

        $coupon->save();

        Flashy::success('New Coupon '. $request->couponCode.' created.');
        return redirect()->route('backend.coupon.list');

    }





    public function show($id) {
        //
    }


    public function edit($id)
    {
        $coupon = Coupon::find($id);


        return view('backend.pages.coupon.edit')->with([
            'coupon' => $coupon
        ]);
    }


    public function update(Request $request) {
        $rules = [
            'code' => 'required|unique:coupons,code,'.$request->id,
            'couponType' => 'required'
        ];

        $customMessages = [
//            'name.required' => 'Yo, what should I call you?',
//            'email.required' => 'We need your email address also',
        ];
        $this->validate($request, $rules, $customMessages);
        $coupon = Coupon::find($request->id);

        $coupon->code = $request->code;
        $coupon->type = $request->couponType;
        $coupon->value = $request->couponValue;
        $coupon->percent_off = $request->couponPercentage;
        $coupon->expire = $request->couponExpireDate;
        $coupon->per_user_limit = $request->couponUserLimit;
        $coupon->max_limit = $request->couponMaxLimit;
        $coupon->minimum_amount = $request->minimum_amount;

        $coupon->save();

        Flashy::success('  Coupon '. $request->couponCode.' updated.');

        return redirect()->route('backend.coupon.list');
    }


    public function destroy(Request $request)
    {
        Coupon::find($request->id)->delete();
        Flashy::success('Coupon removed.');
        return back()->with('success_message', 'coupon has been removed.');
    }
}
