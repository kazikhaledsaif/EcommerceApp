@extends('frontend.layouts.master')
@section('title' , 'About Us')
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
                            <li><a href="{{route('frontend.index')}}">Home</a> <span class="separator">/</span></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
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
                    <img src="{{ asset('frontend/assets/images/banners/about-banner.jpg') }} " alt="">
                </div>

                <!-- About Content -->
                <div class="about-content col-lg-6">
                    <div class="row">
                        <div class="col-12 mb-50">
                            <h1>WELCOME TO <span>Doozo.</span></h1>
                            <p>Doozo provide how all this mistaken idea of denouncing pleasure and sing pain was born an will give you a complete account of the system, and expound the actual teachings of the eat explorer of the truth, the mer of human.</p>
                        </div>

                        <div class="col-12 mb-50">
                            <h4>WIN BEST ONLINE SHOP AT 2018</h4>
                            <p>Doozo provide how all this mistaken idea of denouncing pleasure and sing pain was born an will give you a complete account of the system, and expound the actual teachings of the eat explorer of the truth, the mer of human.</p>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row row-10 mb-80">

                <!-- Banner -->
                <div class="col-md-4 mb-sm-30">
                    <div class="banner">
                        <a href="#"><img src="{{ asset('frontend/assets/images/banners/home3-banner1.jpg') }}" alt="Banner"></a>
                    </div>
                </div>
                <div class="col-md-4 col-12 mb-sm-30">
                    <div class="banner">
                        <a href="#"><img src="{{ asset('frontend/assets/images/banners/home3-banner2.jpg') }}" alt="Banner"></a>
                    </div>
                </div>
                <div class="col-md-4 col-12 mb-sm-30">
                    <div class="banner">
                        <a href="#"><img src="{{ asset('frontend/assets/images/banners/home3-banner3.jpg') }}" alt="Banner"></a>
                    </div>

                </div>

            </div>

            <!-- Mission, Vission & Goal -->
            <div class="about-mission-vission-goal row row-20 mb-80">

                <div class="col-lg-4 col-md-6 col-12 mb-sm-30">
                    <h3>OUR VISSION</h3>
                    <p>PATAKU provide how all this mistaken idea of denouncing pleasure and sing pain was born an will give you a ete account of the system, and expound the actual teangs the eat explorer of the truth, the mer of human tas assumenda est, omnis dolor repellend</p>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-sm-30">
                    <h3>OUR MISSION</h3>
                    <p>PATAKU provide how all this mistaken idea of denouncing pleasure and sing pain was born an will give you a ete account of the system, and expound the actual teangs the eat explorer of the truth, the mer of human tas assumenda est, omnis dolor repellend</p>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-sm-30">
                    <h3>OUR GOAL</h3>
                    <p>PATAKU provide how all this mistaken idea of denouncing pleasure and sing pain was born an will give you a ete account of the system, and expound the actual teangs the eat explorer of the truth, the mer of human tas assumenda est, omnis dolor repellend</p>
                </div>

            </div>

            <div class="row mb-30">

                <!-- About Section Title -->
                <div class="about-section-title col-12 mb-50">
                    <h3>YOU CAN CHOOSE US BECAUSE <br>WE ALWAYS PROVIDE IMPORTANCE...</h3>
                    <p>PATAKU provide how all this mistaken idea of denouncing pleasure and sing pain was born will give you a complete account of the system, and expound the actual</p>
                </div>

                <!-- About Feature -->
                <div class="about-feature col-md-7 col-12 mb-sm-30">
                    <div class="row">

                        <div class="col-md-6 col-12 mb-30">
                            <h4>FAST DELIVERY</h4>
                            <p>PATAKU provide how all this mistaken dea of denouncing pleasure and sing </p>
                        </div>

                        <div class="col-md-6 col-12 mb-30">
                            <h4>QUALITY PRODUCT</h4>
                            <p>PATAKU provide how all this mistaken dea of denouncing pleasure and sing </p>
                        </div>

                        <div class="col-md-6 col-12 mb-30">
                            <h4>SECURE PAYMENT</h4>
                            <p>PATAKU provide how all this mistaken dea of denouncing pleasure and sing </p>
                        </div>

                        <div class="col-md-6 col-12 mb-30">
                            <h4>MONEY BACK GUARNTEE</h4>
                            <p>PATAKU provide how all this mistaken dea of denouncing pleasure and sing </p>
                        </div>

                        <div class="col-md-6 col-12 mb-30">
                            <h4>EASY ORDER TRACKING</h4>
                            <p>PATAKU provide how all this mistaken dea of denouncing pleasure and sing </p>
                        </div>

                        <div class="col-md-6 col-12 mb-30">
                            <h4>FREE RETURN</h4>
                            <p>PATAKU provide how all this mistaken dea of denouncing pleasure and sing </p>
                        </div>

                        <div class="col-md-6 col-12 mb-30 mb-sm-0">
                            <h4>24/7 SUPPORT</h4>
                            <p>PATAKU provide how all this mistaken dea of denouncing pleasure and sing </p>
                        </div>

                    </div>
                </div>

                <!-- About Feature Banner -->
                <div class="about-feature-banner col-md-5 col-12">
                    <div class="banner"><a href="#"><img src="{{ asset('frontend/assets/images/banners/home3-banner8.jpg') }}" alt="Banner"></a></div>
                </div>

            </div>

        </div>
    </div>
    <!-- About Section End -->













@endsection()
