@extends('frontend.layouts.master')

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
                                            @if (auth()->user())
                                                <input type="text" placeholder="First Name" name="fname" value="{{ auth()->user()->name }}" readonly>
                                            @else
                                                <input type="text" placeholder="First Name" name="fname" required>
                                            @endif
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Last Name*</label>
                                            @if (auth()->user())
                                                <input type="text" placeholder="Last Name" name="lname" value="{{ auth()->user()->lname }}" readonly>
                                            @else
                                                <input type="text" placeholder="Last Name" name="lname" required>
                                            @endif
                                        </div>


                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Email Address*</label>
                                            @if (auth()->user())
                                                <input type="email" placeholder="Email Address"  name="email" value="{{ auth()->user()->email }}" readonly >
                                            @else
                                                <input type="email" placeholder="Email Address"  name="email"   required>
                                            @endif
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Phone no*</label>
                                            <input type="text" onkeyup="return getNumber(this)" name="number" placeholder="Phone number" required>
                                        </div>



                                        <div class="col-12 mb-20">
                                            <label>Address*</label>
                                            <input id="address" name="address" type="text" placeholder="Address" required>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Country*</label>
                                            <select name="country" class="nice-select" required>
                                                <option>USA</option>
                                                <option>China</option>

                                                <option>India</option>
                                                <option>Japan</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Town/City*</label>
                                            <input name="city" id="city" type="text" placeholder="Town/City" required>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>State*</label>
                                            <input name="state" id="state" type="text" placeholder="State" required>
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Zip Code*</label>
                                            <input name="postcode" onkeyup="return getNumber(this)" id="postalcode" type="text" placeholder="Zip Code" required>
                                        </div>


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
                                                    <li>{{$item->model->name}} X {{$item->qty}}<span>$

                                                        @if( $item->model->discount_price == 0 )


                                                                {{($item->qty)*$item->model->present_price}}
                                                            @else

                                                                {{($item->qty)*$item->model->discount_price}}

                                                            @endif

                                                    </span></li>
                                                @endforeach
                                            </ul>

                                            <p>Sub Total <span>${{Cart::instance('default')->total()}}</span></p>
                                            <p>Shipping Fee <span>$00.00</span></p>
                                            @if(session()->has('coupon'))

                                                <p>Discount  [ {{ session()->get('coupon')['name'] }} ]

                                                    <span>-${{ session()->get('coupon')['amount'] }}</span></p>


                                                <button type="submit" href="javascript:{}"
                                                        onclick="document.getElementById('coupon').submit()"
                                                        style="background: black; color: white; border: none; margin-bottom: 2px;">Remove coupon</button>


                                            @endif




                                            <h4>Grand Total <span>$<?php
                                                    $num1= (Cart::instance('default')->total());
                                                    $num2= (session()->get('coupon')['amount']);
                                                    $res =  (double)str_replace(',','',$num1)-
                                                        (double)str_replace(',','',$num2);
                                                    echo $res;

                                                    ?> </span></h4>
                                            <input type="hidden" value="{{$res}}" name="total">
                                            <input type="hidden" value="{{session()->get('coupon')['amount']}}" name="cupon_amount">
                                            <input type="hidden" value="{{session()->get('coupon')['name']}}" name="cupon_name">

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

                                            {{--<div class="single-method">--}}
                                            {{--<input type="radio" id="payment_cash" name="payment-method" value="cash">--}}
                                            {{--<label for="payment_cash">Cash on Delivery</label>--}}
                                            {{--<p data-method="cash">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>--}}
                                            {{--</div>--}}

                                            <div class="single-method">
                                                <div class="col-12 mb-20">
                                                    <label>Card Holder Name</label>
                                                    <input name="name_on_card" id="name_on_card" type="text" placeholder="Card Holder Name">
                                                </div>
                                                <div   class="col-12 mb-20">
                                                    <label for="card-element">
                                                        Credit or debit card
                                                    </label>
                                                    <div id="card-element">
                                                        <!-- A Stripe Element will be inserted here. -->
                                                    </div>

                                                    <!-- Used to display form errors. -->
                                                    <div id="card-errors" role="alert"></div>
                                                </div>

                                            </div>

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



    <script>
        // Create a Stripe client.
        var stripe = Stripe('pk_test_OaOKX8xeQpsVBIaGald34Hd0');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style,
            hidePostalCode : true
        });

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            var  options = {
                name: document.getElementById('name_on_card').value,
                address_line1: document.getElementById('address').value,
                address_city: document.getElementById('city').value,
                address_state: document.getElementById('state').value,
                address_zip: document.getElementById('postalcode').value
            }

            stripe.createToken(card,options).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    </script>

@endsection()