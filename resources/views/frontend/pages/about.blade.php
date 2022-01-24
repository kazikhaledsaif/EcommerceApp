@extends('frontend.layouts.master')
@section('title' , 'About Us')
@section('content')




    <!--=============================================
    =            Breadcrumb Area         =
    =============================================-->

    <div class="breadcrumb-area breadcrumb-bg pt-85 pb-85 mb-80" style="background-image:  url( {{ asset('/frontend/assets/images/doozo/about-us-top.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
{{--                    <div class="breadcrumb-container">--}}
{{--                        <ul>--}}
{{--                            <li><a href="{{route('frontend.index')}}">Home</a> <span class="separator">/</span></li>--}}
{{--                            <li class="active">About Us</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Breadcrumb Area  ======-->


    <!-- About Section Start -->
    <div class="about-section mb-80">
        <div class="container">

            <div class="row row-30">

                <!-- About Image -->
                <div class="about-image col-lg-6 mb-80">
                    <img src="{{ asset('frontend/assets/images/doozo/about-us-middle.png') }} " alt="">
                </div>

                <!-- About Content -->
                <div class="about-content col-lg-6">
                    <div class="row">
                        <div class="col-12 mb-50">
                            <h1>WELCOME TO <span>Doozo.</span></h1>
                            <p>A Grocery Delivery Platform especially for the city dwellers. Right from fresh Fruits and
                                Vegetables, Rice and Dals, Spices and Seasonings to Packaged products, Beverages, Personal care products,
                                Meats – we have it all. Choose from a wide range of options in every category, exclusively handpicked to help
                                you find the best quality available at the competitive prices. Your order will be delivered right to your
                                doorstep initially in the Dhaka City, later on we will run our operations in other major cities. You can pay on
                                delivery. We will try to deliver your products on time and the best quality!</p>
                        </div>



                    </div>
                </div>

            </div>

            <div class="row row-10 mb-80">

                <!-- Banner -->
                <div class="col-md-4 mb-sm-30">
                    <div class="banner">
                        <a href="#"><img src="{{ asset('frontend/assets/images/doozo/about-middle-1.png') }}" alt="Banner"></a>
                    </div>
                </div>
                <div class="col-md-4 col-12 mb-sm-30">
                    <div class="banner">
                        <a href="#"><img src="{{ asset('frontend/assets/images/doozo/about-middle-2.png') }}" alt="Banner"></a>
                    </div>
                </div>
                <div class="col-md-4 col-12 mb-sm-30">
                    <div class="banner">
                        <a href="#"><img src="{{ asset('frontend/assets/images/doozo/about-middle-3.png') }}" alt="Banner"></a>
                    </div>

                </div>

            </div>

            <!-- Mission, Vission & Goal -->
            <div class="about-mission-vission-goal row row-20 mb-80">

                <div class="col-lg-4 col-md-6 col-12 mb-sm-30">
                    <h3>Instant Delivery Service in Bangladesh</h3>
                    <p>Grocery on the go and get anything delivered in 60 minutes (or More). Buy everything from groceries to fresh fruits & vegetables, cakes and bakery items, to meats & seafood, cosmetics, mobile & pc accessories, baby care products and much more. We get it delivered at your doorstep in the fastest and the safest way possible.</p>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-sm-30">
                    <h3>Single Platform for all your daily needs</h3>
                    <p>Order thousands of products at just a tap - milk, eggs, bread, cooking oil, ghee, atta, rice, fresh fruits & vegetables, spices, chocolates, chips, biscuits, Maggi, cold drinks, shampoos, soaps, body wash, pet food, diapers, electronics, other organic and gourmet products from your DOOZO and a lot more.</p>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-sm-30">
                    <h3>OUR GOAL</h3>
                    <p>We want our users to spend more time with friends & Family rather than bazar or daily shopping.</p>
                </div>

            </div>

            <div class="row mb-30">

                <!-- About Section Title -->
                <div class="about-section-title col-12 mb-50">
                    <h3>YOU CAN CHOOSE US BECAUSE <br>WE ALWAYS PROVIDE IMPORTANCE...</h3>
                    <p>Our users are our main priority, our team always try to make our users happy.</p>
                </div>

                <!-- About Feature -->
                <div class="about-feature col-md-7 col-12 mb-sm-30">
                    <div class="row">

                        <div class="col-md-6 col-12 mb-30">
                            <h4>FAST DELIVERY</h4>
                            <p>TEAM DOOZO always try to deliver fast to the users as this is their motto.</p>
                        </div>

                        <div class="col-md-6 col-12 mb-30">
                            <h4>QUALITY PRODUCT</h4>
                            <p>We do always assure the product quality before stocking.</p>
                        </div>

                        <div class="col-md-6 col-12 mb-30">
                            <h4>SECURE PAYMENT</h4>
                            <p>Initially we accept only pay on delivery. </p>
                        </div>

                        <div class="col-md-6 col-12 mb-30">
                            <h4>MONEY BACK GUARNTEE</h4>
                            <p>Every DOOZO user will get 2 days comprehensive money back guarantee* </p>
                        </div>

                        <div class="col-md-6 col-12 mb-30">
                            <h4>EASY ORDER TRACKING</h4>
                            <p>You can track your order any time on DOOZO Platform
                            </p>
                        </div>

                        <div class="col-md-6 col-12 mb-30">
                            <h4>FREE RETURN</h4>
                            <p>You are eligible to get Free Return facility in 2 days if you get any wrong or defected products* </p>
                        </div>

                        <div class="col-md-6 col-12 mb-30 mb-sm-0">
                            <h4>24/7 SUPPORT</h4>
                            <p>Our dedicated teams are always be with you on support@dealon.live
                            </p>
                        </div>

                    </div>
                </div>

                <!-- About Feature Banner -->
                <div class="about-feature-banner col-md-5 col-12">
                    <div class="banner"><a href="#"><img src="{{ asset('frontend/assets/images/doozo/about-bottom.png') }}" alt="Banner"></a></div>
                </div>

            </div>

        </div>
    </div>
    <!-- About Section End -->













@endsection()
