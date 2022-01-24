@extends('frontend.layouts.master')
@section('title' , 'Thank you')
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
{{--                            <li class="active">Thank you</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Breadcrumb Area  ======-->

    <!--=============================================
    =            FAQ page content         =
    =============================================-->

    <div class="page-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-40">
                    <div class="section-title instagram-title">
                        <h1>Thank you for purchasing from us.</h1>
                        <h4>Your tacking id is: <b class="alert-success">{{empty($tracking)? "":$tracking}}</b></h4>
                        <p><a href="{{route('frontend.order-check')}}" >Click here to check your order status.</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!--=====  End of FAQ page content  ======-->




@endsection()
