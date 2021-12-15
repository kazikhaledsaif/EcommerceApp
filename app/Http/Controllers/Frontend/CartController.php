<?php

namespace App\Http\Controllers\Frontend;

use App\Coupon;
use App\Product;
use App\Setting;
use App\UserCoupon;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use MercurySeries\Flashy\Flashy;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $settings = Setting::latest('updated_at')->first();
        return view('frontend.pages.cart')
            ->with([
                'settings' => $settings
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product = Product::find($request->id);
        $rows = Cart::instance('default')->content();
        if(count($rows) > 0){


            $rowId = $rows->first()->rowId;
            if (Cart::instance('default')->content()[ $rowId ]->qty >= $product->stock){
                Flashy::error('Sorry ! You cannot add more than available quantity!');
                return back()->with('error_massage','Sorry ! You cannot add more than available quantity');
            }

            else {
                Cart::instance('default')->add($request->id, $request->name, $request->quantity, $request->price)->associate('App\Product');
                Flashy::success('Item was added to your cart!');

                return back()->with('success_message', 'Item added to your cart!');
            }
        }else {


            if ($request->quantity > $product->stock) {
                Flashy::error('Sorry ! You cannot add more than available quantity!');

                return back()->with('error_massage', 'Sorry ! You cannot add more than available quantity');
            } else {

                Cart::instance('default')->add($request->id, $request->name, $request->quantity, $request->price)->associate('App\Product');
                Flashy::success('Item was added to your cart!');

                return back()->with('success_message', 'Item added to your cart!');
            }
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        Cart::instance('default')->update($id,$request->quantity);
        return redirect()->route('frontend.cart.index')->with('alert_massage','Item is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        Cart::instance('default')->remove($rowId);
        return back()->with('error_massage','Item has been removed!');
        // return redirect()->route('cart.index')->with('success_message','Item was added to your cart!');

    }
    public function storeCoupon(Request $request)
    {


        $code = Coupon::where('code', $request->coupon_code)->first();

        if(!$code || empty($code)  ){
            Flashy::error("Sorry! Invalid Coupon.");
          // $msg = "Invalid coupon !";

            return response()->json(200);
           // return redirect()->route('frontend.cart.index')->with('success_message', 'Invalid coupon !');
        }

        if (  !empty($code->expire) && Carbon::now() > $code->expire){
            Flashy::error("Sorry! Coupon Expired!");
            // $msg = "Invalid coupon !";

            return response()->json(200);

        }
        $total_redeem= DB::table('user_coupons')->where('coupon_id', '=' , $code->id)->sum('redeemed_number');
        if (!empty($code->max_limit)){
            if (!empty($total_redeem)){
                if (  !empty($code) && $code->max_limit <= $total_redeem){
                    Flashy::error("Sorry! Coupon max limit exceeded.");
                    // $msg = "Invalid coupon !";

                    return response()->json(200);

                }
            }

        }

        $user_coupon =  UserCoupon::where([
                ['user_id', '=', auth()->guard('user')->user()->id],
                ['coupon_id', '=', $code->id]
            ])->get();
        if (!empty($code->per_user_limit)){
            if (  !empty($user_coupon) && $user_coupon[0]->redeemed_number >= $code->per_user_limit){
                Flashy::error("Sorry! Coupon limit exceeded for you.");
                // $msg = "Invalid coupon !";

                return response()->json(200);

            }
        }
        if (Cart::count()  < 1){

                Flashy::error("Sorry! You must cart some item !" );
                // $msg = "Invalid coupon !";

                return response()->json(200);

        }
        if (Cart::count()  > 0){

                if (  !empty($code) && $code->type == "fixed" && !empty($code->minimum_amount) &&(double)Cart::instance('default')->subtotal(null,null,'')<   $code->minimum_amount ){


                    Flashy::error("Sorry! Coupon will applicable for more than ".$code->minimum_amount." taka!" );
                    // $msg = "Invalid coupon !";

                    return response()->json(200);

            }
        }
        if (Cart::count()  > 0){

            if ( (double)Cart::instance('default')->subtotal(null,null,'') - $code->discount( Cart::subtotal(2,'.','')  <   0 )){


                Flashy::error("Sorry! Coupon is not applicable!" );
                // $msg = "Invalid coupon !";

                return response()->json(200);

            }
        }


        UserCoupon::updateOrCreate(
            ['user_id' => auth()->guard('user')->user()->id, 'coupon_id' => $code->id]

        )->Increment('redeemed_number');;
        session()->put('coupon', [
            'name' => $code->code,
            'id' => $code->id,
            'amount' =>$code->discount( Cart::subtotal(2,'.',''))
        ]);
        Flashy::success("Coupon Applied !");
        // $msg = "Invalid coupon !";

        return response()->json(200);
       // return redirect()->route('frontend.cart.index')->with('success_message', 'coupon Applied ');
    }

    public function destroyCoupon(Request $request)
    {
        $user_coupon =  UserCoupon::where([
        ['user_id', '=', auth()->guard('user')->user()->id],
        ['coupon_id', '=', $request->id]
        ])->get();
        if ($user_coupon[0] && $user_coupon[0]->redeemed_number > 0){
            $user_coupon[0]->decrement('redeemed_number');
            session()->forget('coupon');
            Flashy::success("Coupon Removed !");
            // $msg = "Invalid coupon !";

            return response()->json(200);
        }
        Flashy::success("Try again !");
        // $msg = "Invalid coupon !";

        return response()->json(200);


     //  return back()->with('success_message', 'coupon has been removed.');
    }


}
