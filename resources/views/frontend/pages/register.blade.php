@extends('frontend.layouts.master')
@section('title' , 'Registration')
@section('content')


    <!--=============================================
    =            Breadcrumb Area         =
    =============================================-->

    <div class="breadcrumb-area breadcrumb-bg pt-85 pb-85" style="background-image:  url( {{ asset('/frontend/assets/images/doozo/shop-banner.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
{{--                    <div class="breadcrumb-container">--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">Home</a> <span class="separator">/</span></li>--}}
{{--                            <li class="active"> Register</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Breadcrumb Area  ======-->


    <!--=============================================
    =            Login Register page content         =
    =============================================-->

    <div class="page-section mb-80">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12 mx-auto">
                    <form method="POST" action="{{ route('frontend.register.create') }}">
                        @csrf


                        <div class="login-form">
                            <h4 class="login-title">Register</h4>

                            <div class="row">
                                <div class="col-md-6 col-12 mb-20">
                                    <label>First Name</label>

                                    <input  placeholder="First Name"  type="text" class="mb-0 form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                    @if ($errors->has('first_name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Last Name</label>
                                    <input class="mb-0" type="text" placeholder="Last Name" name="last_name">


                                    @if ($errors->has('last_name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Email Address*</label>

                                    <input type="email" placeholder="Email Address" class="mb-0 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Phone No.*</label>

                                    <input type="number" placeholder="Phone No." class="mb-0 form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Password</label>

                                    <input placeholder="Password" type="password" class="mb-0 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Confirm Password</label>

                                    <input  placeholder="Confirm Password" type="password" class="mb-0 form-control" name="password_confirmation" required>
                                </div>
                                <div class="col-md-12 mt-10 mb-20 text-left text-md-right">
                                    <a href="{{ route('frontend.login') }}"> Already have an account?</a>
                                </div>
                                <div class="col-12">
                                    <button class="register-button mt-0">Register</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Login Register page content  ======-->





@endsection()
