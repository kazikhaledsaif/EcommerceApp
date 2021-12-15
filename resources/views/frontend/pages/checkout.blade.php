@extends('frontend.layouts.master')
@section('title' , 'Checkout')
@section('content')



    <!--=============================================
    =            Breadcrumb Area         =
    =============================================-->
    <div class="breadcrumb-area breadcrumb-bg pt-85 pb-85 mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="{{ route('frontend.index') }}">Home</a> <span class="separator">/</span></li>
                            <li class="active">Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====  End of Breadcrumb Area  ======-->

    <div  class="container">
        @if(session()->has('success_message'))
            <div class="alert alert-success">
                <h4> {{session()->get('success_message')}}</h4>
            </div><br><br>
        @endif
        @if(count($errors)>0)
            <div class=" alert alert-danger">
                <ul>
                    @foreach($errors->all as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div><br><br>
        @endif
    </div>
    <!--=============================================
    =            Checkout page content         =
    =============================================-->

    <div class="page-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Checkout Form s-->
                    <form id="payment-form" action="{{ route('frontend.checkout.store') }}" method="post" class="checkout-form">
                        {{csrf_field()}}
                        <div class="row row-40">

                            <div class="col-lg-7 mb-20">

                                <!-- Billing Address -->
                                <div id="billing-form" class="mb-40">
                                    <h4 class="checkout-title">Billing Address</h4>

                                    <div class="row">

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>First Name*</label>
                                       {{--     @if (auth()->user())
                                                <input type="text" placeholder="First Name" name="fname" value="{{ auth()->user()->name }}" readonly>
                                            @else--}}
                                                <input type="text" placeholder="First Name" name="fname" required
                                                       value="{{ !empty(Auth::guard('user')->user()->first_name) ? Auth::guard('user')->user()->first_name : "" }}">
                                          {{--  @endif--}}
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Last Name*</label>
                                      {{--      @if (auth()->user())
                                                <input type="text" placeholder="Last Name" name="lname" value="{{ auth()->user()->lname }}" readonly>
                                            @else--}}
                                                <input type="text" placeholder="Last Name" name="lname" required
                                                       value="{{ !empty(Auth::guard('user')->user()->last_name) ? Auth::guard('user')->user()->last_name : "" }}">
                                         {{--   @endif--}}
                                        </div>


                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Email Address*</label>
                                            @if ( auth()->guard('user')->user())
                                                <input type="email" placeholder="Email Address"  name="email" value="{{ auth()->user()->email }}" readonly >
                                            @else
                                                <input type="email" placeholder="Email Address"  name="email"   required>
                                            @endif
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Phone no*</label>
                                            <input
                                                value="{{ !empty(Auth::guard('user')->user()->phone) ? Auth::guard('user')->user()->phone : "" }}"
                                                type="text" onkeyup="return getNumber(this)" name="number" placeholder="Phone number" required>
                                        </div>



                                        <div class="col-12 mb-20">
                                            <label>Address*</label>
                                            <input id="address" name="address" type="text" placeholder="Address"
                                                   value="{{ !empty(Auth::guard('user')->user()->address) ? Auth::guard('user')->user()->address : "" }}"
                                                   required>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Country</label>
                                            <input type="text"
                                                   value="Bangladesh" disabled
                                            >
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Town/City*</label>
                                            <input name="city" id="city" type="text" placeholder="Town/City"
                                                   value="{{ !empty(Auth::guard('user')->user()->city) ? Auth::guard('user')->user()->city : "" }}"
                                                   required>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>State*</label>
                                            <input name="state"
                                                   value="{{ !empty(Auth::guard('user')->user()->state) ? Auth::guard('user')->user()->state : "" }}"
                                                   id="state" type="text" placeholder="State" required>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Zip Code*</label>
                                            <input
                                                value="{{ !empty(Auth::guard('user')->user()->zip) ? Auth::guard('user')->user()->zip : "" }}"
                                                name="postcode" onkeyup="return getNumber(this)" id="postalcode" type="text" placeholder="Zip Code" required>
                                        </div>

                                        <div class="col-md-12 mb-20">
                                            @if(!session()->has('coupon'))
                                                <div class="discount-coupon">
                                                    <h4>Discount Coupon Code</h4>
                                                    <form action="{{ route('frontend.coupon.store') }}" method="POST">
                                                        <div class="row">
                                                            {{ csrf_field() }}
                                                            <div class="col-md-6  ">
                                                                <input type="text" name="coupon_code" id="coupon_code" placeholder="Coupon Code" >
                                                                <input type="hidden" name="total" value="{{ Cart::instance('default')->total() }}">
                                                            </div>
                                                            <div class="col-md-4  ">
                                                                <input data-token="{{ @csrf_token() }}" class="coupon_apply" type="submit"style="    width: 140px;
    border-radius: 0;

    border: none;
    line-height: 24px;


    font-weight: 400;
    text-transform: uppercase;
    color: #ffffff;
    background-color: #1e1e1e;" value="Apply Code">
                                                            </div>
                                                        </div>
                                                    </form>


                                                </div>
                                            @endif     </div>


                                        {{--<div class="col-12 mb-20">--}}
                                        {{--<div class="check-box">--}}
                                        {{--<input type="checkbox" id="create_account">--}}
                                        {{--<label for="create_account">Create an Acount?</label>--}}
                                        {{--</div>--}}
                                        {{--<div class="check-box">--}}
                                        {{--<input type="checkbox" id="shiping_address" data-shipping>--}}
                                        {{--<label for="shiping_address">Ship to Different Address</label>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-5">
                                <div class="row">

                                    <!-- Cart Total -->
                                    <div class="col-12 mb-60">

                                        <h4 class="checkout-title">Cart Total</h4>

                                        <div class="checkout-cart-total">

                                            <h4>Product <span>Total</span></h4>

                                            <ul>
                                                @foreach(Cart::instance('default')->content() as $item)
                                                    <li>{{$item->model->name}} X {{$item->qty}}<span>৳

                                                        @if( $item->model->discount_price == 0 )


                                                                {{($item->qty)*$item->model->regular_price}}
                                                            @else

                                                                {{($item->qty)*$item->model->discount_price}}

                                                            @endif

                                                    </span></li>
                                                @endforeach
                                            </ul>

                                            <p>Sub Total <span>৳ {{  (double)str_replace(',','', Cart::instance('default')->total())}}</span></p>
                                            <p>Shipping Fee <span>৳ {{empty($settings)? 0: $settings->delivery_cost}}</span></p>
                                            @if(session()->has('coupon'))

                                                <p>Discount  [ {{ session()->get('coupon')['name'] }} ]

                                                    <span>-৳ {{ session()->get('coupon')['amount'] }}</span></p>


                                                <button   data-token="{{ @csrf_token() }}" data-id="{{ session()->get('coupon')['id'] }}"  class="coupon_remove"
                                                        style="background: black; color: white; border: none; margin-bottom: 2px;">Remove coupon</button>


                                            @endif




                                            <h4>Grand Total <span>৳ <?php
                                                    $shipping= empty($settings)? 0 : $settings->delivery_cost;
                                                    $num1= (Cart::instance('default')->total());
                                                    $num2= !empty(session()->get('coupon')['amount']) ? (session()->get('coupon')['amount']) : 0 ;
                                                    $res =  (double)str_replace(',','',$num1)-
                                                        (double)str_replace(',','',$num2)+
                                                        (double)str_replace(',','',$shipping) ;
                                                    echo $res;

                                                    ?>
                                                </span>
                                            </h4>
                                            <input type="hidden" value="{{$res}}" name="total">
                                            <input type="hidden" value="{{!empty(session()->get('coupon')['amount']) ? (session()->get('coupon')['amount']) : 0 }}" name="cupon_amount">
                                            <input type="hidden" value="{{!empty(session()->get('coupon')['name']) ? (session()->get('coupon')['name']) : 0 }}" name="cupon_name">
                                            <input type="hidden" value="{{!empty(session()->get('coupon')['id']) ? (session()->get('coupon')['id']) : null }}" name="cupon_id">

                                        </div>

                                    </div>

                                    <!-- Payment Method -->
                                    <div class="col-12">

                                        <h4 class="checkout-title">Payment Method</h4>

                                        <div class="checkout-payment-method">

                                            {{--<div class="single-method">--}}
                                            {{--<input type="radio" id="payment_check" name="payment-method" value="check">--}}
                                            {{--<label for="payment_check">Check Payment</label>--}}
                                            {{--<p data-method="check">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>--}}
                                            {{--</div>--}}

                                            {{--<div class="single-method">--}}
                                            {{--<input type="radio" id="payment_bank" name="payment-method" value="bank">--}}
                                            {{--<label for="payment_bank">Direct Bank Transfer</label>--}}
                                            {{--<p data-method="bank">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>--}}
                                            {{--</div>--}}

                                            <div class="single-method">
                                            <input type="radio" id="payment_cash" name="payment-method" value="cash">
                                            <label for="payment_cash">Cash on Delivery</label>
                                            <p data-method="cash">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                            </div>

{{--                                            <div class="single-method">--}}
{{--                                                <div class="col-12 mb-20">--}}
{{--                                                    <label>Card Holder Name</label>--}}
{{--                                                    <input name="name_on_card" id="name_on_card" type="text" placeholder="Card Holder Name">--}}
{{--                                                </div>--}}
{{--                                                <div   class="col-12 mb-20">--}}
{{--                                                    <label for="card-element">--}}
{{--                                                        Credit or debit card--}}
{{--                                                    </label>--}}
{{--                                                    <div id="card-element">--}}
{{--                                                        <!-- A Stripe Element will be inserted here. -->--}}
{{--                                                    </div>--}}

{{--                                                    <!-- Used to display form errors. -->--}}
{{--                                                    <div id="card-errors" role="alert"></div>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}

                                            {{--    <div class="single-method">
                                                    <input type="radio" id="stripe" name="stripe" value="stripe">
                                                    <label for="stripe">Stripe</label>
                                                    <p data-method="stripe">
                                                        Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode,
                                                        Store Country.</p>
                                                </div>--}}

                                            <div class="single-method">
                                                <input type="checkbox" id="accept_terms" required>
                                                <label for="accept_terms">I’ve read and accept the terms & conditions</label>
                                            </div>

                                        </div>

                                        <button id="submit-button" class="place-order">Place order</button>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </form>
                {{--    <form id="coupon" action="{{ route('coupon.destroy') }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}

                    </form>--}}
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Checkout page content  ======-->




@endsection()
@push('scripts')


     <script>
         $( function () {
                 if (sessionStorage.reloadAfterPageLoad == true) {
                     flashy();
                    // console.log(sessionStorage.reloadAfterPageLoadResponse)
                    //  if (sessionStorage.reloadAfterPageLoadResponse){
                    //
                    //
                    //  }
                     //sessionStorage.reloadAfterPageLoadResponse = null;
                     sessionStorage.reloadAfterPageLoad = false;

                 }
             }
         );
        $(document).on('click', '.coupon_apply', function (e) {
            e.preventDefault();
            var coupon_code = $('#coupon_code').val();
            var token = $(this).data('token');

            console.log(token);
            console.log(coupon_code);

                if (coupon_code) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('frontend.coupon.store')  }}",
                        data: {coupon_code:coupon_code, _token:token},
                        success:function(response){
                            console.log(response.msg);
                            if(response) {
                                console.log(response.msg)
                                sessionStorage.reloadAfterPageLoad = true;
                                //sessionStorage.reloadAfterPageLoadResponse = response.msg;
                                window.location.reload();
                            }
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });


                }

        });
         $(document).on('click', '.coupon_remove', function (e) {
             e.preventDefault();
             var token = $(this).data('token');
             var id = $(this).data('id');

             console.log(token);

             if (token) {
                 $.ajax({
                     type: "delete",
                     url: "{{ route('frontend.coupon.destroy') }}",
                     data: { id:id,_token:token},
                     success:function(response){
                         console.log(response.msg);
                         if(response) {
                             console.log(response.msg)

                             window.location.reload();
                         }
                     },
                     error: function(error) {
                         console.log(error);
                     }
                 });


             }

         });

    </script>
@endpush
