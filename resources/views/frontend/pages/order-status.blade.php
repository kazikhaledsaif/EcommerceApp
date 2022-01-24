@extends('frontend.layouts.master')
@section('title' , 'Order Status')
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
{{--                            <li><a href="{{ route('frontend.index') }}">Home</a> <span class="separator">/</span></li>--}}
{{--                            <li class="active">Order Status</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Breadcrumb Area  ======-->


    <!--=============================================
=            Contact page content         =
=============================================-->

    <div class="page-content mb-45">

        <!--=============================================
        =            google map container         =
        =============================================-->

        <div class="google-map-container mb-80">

        </div>

        <!--=====  End of google map container  ======-->

        <div class="container">
            <div class="row">

                <div class=" col-md-12 pl-100 pl-sm-15">
                    <!--=======  contact form content  =======-->

                    <div class="contact-form-content text-center">
                        <h3 class="contact-page-title pl-3">Check Your Order Status</h3>

                        <div class="contact-form">
                            <form  id="contact-form" action="{{ route('frontend.order-check') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label>Enter your tracking number <span class="required">*</span></label>
                                        <input style="width: 70%" type="text" name="tracking_id" id="tracking_id" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group  col-md-12">
                                        <button type="submit" value="submit" id="submit" class="pataku-btn" name="submit">send</button>
                                    </div>
                                </div>


                            </form>
                        </div>

                        @if(!empty($order))

                            @if($order->status == "Cancelled")
                                <div class="alert alert-danger m-3">
                                    Your current order status for {{$tracker}} is :  {{$order->status }} <br><br>
                                    <b>{{empty($order->cancelReason)?"":$order->cancelReason->reasons}}</b>
                                </div>
                            @else
                                <div class="alert alert-success m-3">
                                    Your current order status for {{$tracker}} is :  {{$order->status }}

                                </div>
                            @endif
                        @endif
                        @if(session()->has('message'))
                            <div class="alert alert-info m-3">
                                {{ session()->get('message') }}
                            </div>
                        @endif
{{--                        <p class="form-messege pt-10 pb-10 mt-10 mb-10 ml-3"></p>--}}
                    </div>

                    <!--=======  End of contact form content =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Contact page content  ======-->



@endsection()


