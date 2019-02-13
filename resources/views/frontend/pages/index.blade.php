@extends('frontend.layouts.master')

@section('content')



    <!--=============================================
=            Hero Area One         =
=============================================-->

    <div class="hero-area pt-15 mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  slider container  =======-->

                    <div class="slider-container">
                        <!--=======  hero slider one  =======-->

                        <div class="hero-slider-one">
                            <!--=======  slider item  =======-->

                            <div class="hero-slider-item slider-bg-1">
                                <!--=======  slider content  =======-->

                                <div class="slider-content  d-flex flex-column justify-content-center align-items-start h-100">
                                    <p>Beautiful and luxurious Decor at Affordable price</p>
                                    <h1>ACCENT <span>CHAIR</span></h1>
                                    <a href="shop-left-sidebar.html" class="pataku-btn slider-btn-1">SHOP NOW</a>
                                </div>

                                <!--=======  End of slider content  =======-->
                            </div>

                            <!--=======  End of slider item  =======-->

                            <!--=======  slider item  =======-->

                            <div class="hero-slider-item slider-bg-2">
                                <!--=======  slider content  =======-->

                                <div class="slider-content d-flex flex-column justify-content-center align-items-start h-100">
                                    <p>Ultra bright slimline led table lamp. A light for perfect color matching</p>
                                    <h1>TABLE <span>LAMPS</span></h1>
                                    <a href="shop-left-sidebar.html" class="pataku-btn slider-btn-1">SHOP NOW</a>
                                </div>

                                <!--=======  End of slider content  =======-->
                            </div>

                            <!--=======  End of slider item  =======-->

                        </div>

                        <!--=======  End of hero slider one  =======-->
                    </div>

                    <!--=======  End of slider container  =======-->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 pt-40 pb-40">
                    <!--=======  feature area  =======-->

                    <div class="feature-area">
                        <!--=======  single feature  =======-->

                        <div class="single-feature mb-md-20 mb-sm-20">
                            <span class="icon"><i class="lnr lnr-rocket"></i></span>
                            <p>Free Shipping <span>Free shipping on all US order</span></p>
                        </div>

                        <!--=======  End of single feature  =======-->
                        <!--=======  single feature  =======-->

                        <div class="single-feature mb-md-20 mb-sm-20">
                            <span class="icon"><i class="lnr lnr-phone"></i></span>
                            <p>Support 24/7 <span>Contact us 24 hours a day</span></p>
                        </div>

                        <!--=======  End of single feature  =======-->
                        <!--=======  single feature  =======-->

                        <div class="single-feature mb-xxs-20">
                            <span class="icon"><i class="lnr lnr-undo"></i></span>
                            <p>100% Money Back <span>You have 30 days to Return</span></p>
                        </div>

                        <!--=======  End of single feature  =======-->
                        <!--=======  single feature  =======-->

                        <div class="single-feature mb-xxs-20">
                            <span class="icon"><i class="lnr lnr-gift"></i></span>
                            <p>Payment Secure <span>We ensure secure payment</span></p>
                        </div>

                        <!--=======  End of single feature  =======-->
                    </div>

                    <!--=======  End of feature area  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Hero Area One  ======-->


    <!--=============================================
    =            featured categories         =
    =============================================-->

    <div class="featured-categories mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-40">
                    <div class="section-title">
                        <h2>Featured <span>Categories</span></h2>
                        <p>Show all featured categories with products on home page.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-sm-30">
                    <div class="banner">
                        <a href="shop-left-sidebar.html">
                            <img src="{{ asset('frontend/assets/images/category-banner/home1-banner1.jpg') }} " class="img-fluid" alt="">
                        </a>
                        <span class="banner-category-title">
							<a href="shop-left-sidebar.html">furniture</a>
						</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mb-30">
                            <div class="banner">
                                <a href="shop-left-sidebar.html">
                                    <img src="{{ asset('frontend/assets/images/category-banner/home1-banner2.jpg') }}  " class="img-fluid" alt="">
                                </a>
                                <span class="banner-category-title">
									<a href="shop-left-sidebar.html">rooms</a>
								</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="banner">
                                <a href="shop-left-sidebar.html">
                                    <img src="{{ asset('frontend/assets/images/category-banner/home1-banner3.jpg') }} " class="img-fluid" alt="">
                                </a>
                                <span class="banner-category-title">
									<a href="shop-left-sidebar.html">lighting</a>
								</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="banner">
                                <a href="shop-left-sidebar.html">
                                    <img src="{{ asset('frontend/assets/images/category-banner/home1-banner4.jpg') }} " class="img-fluid" alt="">
                                </a>
                                <span class="banner-category-title">
									<a href="shop-left-sidebar.html">decor</a>
								</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of featured categories  ======-->

    <!--=============================================
    =            Double row product slider          =
    =============================================-->

    <div class="double-row-product-slider mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-40">
                    <div class="section-title">
                        <h2>New <span>Collections</span> Of Arrivals</h2>
                        <p>Browse the collection of our new products, You will definitely find what you are looking for.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  top selling product slider container  =======-->

                    <div class="ptk-slider double-row-slider-container" data-row = "2" >



                        <div class="col">
                            <!--=======  single product  =======-->

                            <div class="ptk-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product05.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Mug Today is a good day</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of single product  =======-->
                        </div>

                        <div class="col">
                            <!--=======  single product  =======-->

                            <div class="ptk-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product01.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Field Messenger</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of single product  =======-->
                        </div>

                        <div class="col">
                            <!--=======  single product  =======-->

                            <div class="ptk-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product02.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Teton Pullover Hoo</a></p>
                                    <p class="product-price">
                                        <span class="main-price">$75.90</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of single product  =======-->
                        </div>

                        <div class="col">
                            <!--=======  single product  =======-->

                            <div class="ptk-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product03.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Hummingbird printed t-shirt</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of single product  =======-->
                        </div>

                        <div class="col">
                            <!--=======  single product  =======-->

                            <div class="ptk-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product04.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Aim Analog</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of single product  =======-->
                        </div>

                        <div class="col">
                            <!--=======  single product  =======-->

                            <div class="ptk-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product05.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Mug Today is a good day</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of single product  =======-->
                        </div>
                        <div class="col">
                            <!--=======  single product  =======-->

                            <div class="ptk-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product05.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Mug Today is a good day</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of single product  =======-->
                        </div>

                        <div class="col">
                            <!--=======  single product  =======-->

                            <div class="ptk-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product01.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Field Messenger</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of single product  =======-->
                        </div>

                        <div class="col">
                            <!--=======  single product  =======-->

                            <div class="ptk-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product02.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Teton Pullover Hoo</a></p>
                                    <p class="product-price">
                                        <span class="main-price">$75.90</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of single product  =======-->
                        </div>

                        <div class="col">
                            <!--=======  single product  =======-->

                            <div class="ptk-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product03.jpg') }}  " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Hummingbird printed t-shirt</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of single product  =======-->
                        </div>

                        <div class="col">
                            <!--=======  single product  =======-->

                            <div class="ptk-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product04.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Aim Analog</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of single product  =======-->
                        </div>

                        <div class="col">
                            <!--=======  single product  =======-->

                            <div class="ptk-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product05.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Mug Today is a good day</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of single product  =======-->
                        </div>

                    </div>

                    <!--=======  End of top selling product slider container  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Double row product slider   ======-->

    <!--=============================================
    =            fullwidth banner area         =
    =============================================-->

    <div class="fullwidth-banner-area fullwidth-banner-bg fullwidth-banner-bg-1 pt-120 pb-120 pt-xs-80 pb-xs-80 mb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-9 col-12">
                    <!--=======  fullwidth banner content  =======-->

                    <div class="fullwidth-banner-content">
                        <p class="fullwidth-banner-title">It's your job to have the idea. It's ours to make it happen.</p>
                        <p>We are a Melboume based furniture maker helping people bring their iadeas to life.</p>
                        <a href="shop-left-sidebar.html">View our products <i class="fa fa-angle-right"></i></a>
                    </div>

                    <!--=======  End of fullwidth banner content  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of fullwidth banner area  ======-->

    <!--=============================================
    =            deal and propular product area         =
    =============================================-->

    <div class="deal-popular-product-area mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-md-80 mb-sm-80">
                    <div class="section-title mb-40">
                        <h2>Deals <span>of The</span> Week</h2>
                        <p>Deals of the Week are a selection of fresh deals updated every week!</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <!--=======  deal slider container  =======-->

                            <div class="ptk-slider deal-slider-container">
                                <div class="col">
                                    <!--=======  single product  =======-->
                                    <div class="product-countdown" data-countdown="2020/05/01"></div>

                                    <div class="ptk-product">
                                        <div class="image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('frontend/assets/images/products/product01.jpg') }} " class="img-fluid" alt="">
                                            </a>
                                            <!--=======  hover icons  =======-->

                                            <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                            <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                            <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                            <!--=======  End of hover icons  =======-->

                                            <!--=======  badge  =======-->

                                            <div class="product-badge">
                                                <span class="new-badge">NEW</span>
                                                <span class="discount-badge">-8%</span>
                                            </div>

                                            <!--=======  End of badge  =======-->

                                        </div>
                                        <div class="content">
                                            <p class="product-title"><a href="single-product.html">Field Messenger</a></p>
                                            <p class="product-price">
                                                <span class="main-price discounted">$75.90</span>
                                                <span class="discounted-price">$69.83</span>
                                            </p>
                                        </div>
                                        <div class="rating">
                                            <i class="lnr lnr-star active"></i>
                                            <i class="lnr lnr-star active"></i>
                                            <i class="lnr lnr-star active"></i>
                                            <i class="lnr lnr-star active"></i>
                                            <i class="lnr lnr-star"></i>
                                        </div>
                                    </div>

                                    <!--=======  End of single product  =======-->
                                </div>

                                <div class="col">
                                    <!--=======  single product  =======-->
                                    <div class="product-countdown" data-countdown="2020/05/01"></div>
                                    <div class="ptk-product">
                                        <div class="image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('frontend/assets/images/products/product02.jpg') }} " class="img-fluid" alt="">
                                            </a>
                                            <!--=======  hover icons  =======-->

                                            <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                            <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                            <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                            <!--=======  End of hover icons  =======-->

                                            <!--=======  badge  =======-->

                                            <div class="product-badge">
                                                <span class="new-badge">NEW</span>
                                            </div>

                                            <!--=======  End of badge  =======-->

                                        </div>
                                        <div class="content">
                                            <p class="product-title"><a href="single-product.html">Teton Pullover Hoo</a></p>
                                            <p class="product-price">
                                                <span class="main-price">$75.90</span>
                                            </p>
                                        </div>
                                        <div class="rating">
                                            <i class="lnr lnr-star active"></i>
                                            <i class="lnr lnr-star active"></i>
                                            <i class="lnr lnr-star active"></i>
                                            <i class="lnr lnr-star active"></i>
                                            <i class="lnr lnr-star"></i>
                                        </div>
                                    </div>

                                    <!--=======  End of single product  =======-->
                                </div>

                                <div class="col">
                                    <!--=======  single product  =======-->
                                    <div class="product-countdown" data-countdown="2020/05/01"></div>
                                    <div class="ptk-product">
                                        <div class="image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('frontend/assets/images/products/product03.jpg') }}" class="img-fluid" alt="">
                                            </a>
                                            <!--=======  hover icons  =======-->

                                            <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                            <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                            <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                            <!--=======  End of hover icons  =======-->

                                            <!--=======  badge  =======-->

                                            <div class="product-badge">
                                                <span class="new-badge">NEW</span>
                                                <span class="discount-badge">-8%</span>
                                            </div>

                                            <!--=======  End of badge  =======-->

                                        </div>
                                        <div class="content">
                                            <p class="product-title"><a href="single-product.html">Hummingbird printed t-shirt</a></p>
                                            <p class="product-price">
                                                <span class="main-price discounted">$75.90</span>
                                                <span class="discounted-price">$69.83</span>
                                            </p>
                                        </div>
                                        <div class="rating">
                                            <i class="lnr lnr-star active"></i>
                                            <i class="lnr lnr-star active"></i>
                                            <i class="lnr lnr-star active"></i>
                                            <i class="lnr lnr-star active"></i>
                                            <i class="lnr lnr-star"></i>
                                        </div>
                                    </div>

                                    <!--=======  End of single product  =======-->
                                </div>

                                <div class="col">
                                    <!--=======  single product  =======-->
                                    <div class="product-countdown" data-countdown="2020/05/01"></div>
                                    <div class="ptk-product">
                                        <div class="image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('frontend/assets/images/products/product04.jpg') }} " class="img-fluid" alt="">
                                            </a>
                                            <!--=======  hover icons  =======-->

                                            <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                            <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                            <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                            <!--=======  End of hover icons  =======-->

                                            <!--=======  badge  =======-->

                                            <div class="product-badge">
                                                <span class="new-badge">NEW</span>
                                                <span class="discount-badge">-8%</span>
                                            </div>

                                            <!--=======  End of badge  =======-->

                                        </div>
                                        <div class="content">
                                            <p class="product-title"><a href="single-product.html">Aim Analog</a></p>
                                            <p class="product-price">
                                                <span class="main-price discounted">$75.90</span>
                                                <span class="discounted-price">$69.83</span>
                                            </p>
                                        </div>
                                        <div class="rating">
                                            <i class="lnr lnr-star active"></i>
                                            <i class="lnr lnr-star active"></i>
                                            <i class="lnr lnr-star active"></i>
                                            <i class="lnr lnr-star active"></i>
                                            <i class="lnr lnr-star"></i>
                                        </div>
                                    </div>

                                    <!--=======  End of single product  =======-->
                                </div>
                            </div>

                            <!--=======  End of deal slider container  =======-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title mb-40">
                        <h2>Some <span>Popular</span> Products</h2>
                        <p>We offer the best selection furniture at prices you will love!</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <!--=======  popular product slider  =======-->


                            <div class="ptk-slider popular-product-slider" data-row="3">
                                <div class="col">
                                    <!--=======  single product  =======-->

                                    <div class="ptk-product d-flex">
                                        <div class="image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('frontend/assets/images/products/product01.jpg') }}" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <p class="product-title"><a href="single-product.html">Field Messenger</a></p>
                                            <p class="product-price">
                                                <span class="main-price discounted">$75.90</span>
                                                <span class="discounted-price">$69.83</span>
                                            </p>
                                            <div class="rating rating-product-style-2">
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--=======  End of single product  =======-->
                                </div>
                                <div class="col">
                                    <!--=======  single product  =======-->

                                    <div class="ptk-product d-flex">
                                        <div class="image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('frontend/assets/images/products/product02.jpg') }} " class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <p class="product-title"><a href="single-product.html">Mug Today is a good day</a></p>
                                            <p class="product-price">
                                                <span class="main-price discounted">$75.90</span>
                                                <span class="discounted-price">$69.83</span>
                                            </p>
                                            <div class="rating rating-product-style-2">
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--=======  End of single product  =======-->
                                </div>
                                <div class="col">
                                    <!--=======  single product  =======-->

                                    <div class="ptk-product d-flex">
                                        <div class="image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('frontend/assets/images/products/product03.jpg') }} " class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <p class="product-title"><a href="single-product.html">Teton Pullover Hoo</a></p>
                                            <p class="product-price">
                                                <span class="main-price discounted">$75.90</span>
                                                <span class="discounted-price">$69.83</span>
                                            </p>
                                            <div class="rating rating-product-style-2">
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--=======  End of single product  =======-->
                                </div>
                                <div class="col">
                                    <!--=======  single product  =======-->

                                    <div class="ptk-product d-flex">
                                        <div class="image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('frontend/assets/images/products/product04.jpg') }}" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <p class="product-title"><a href="single-product.html">Field Messenger</a></p>
                                            <p class="product-price">
                                                <span class="main-price discounted">$75.90</span>
                                                <span class="discounted-price">$69.83</span>
                                            </p>
                                            <div class="rating rating-product-style-2">
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--=======  End of single product  =======-->
                                </div>
                                <div class="col">
                                    <!--=======  single product  =======-->

                                    <div class="ptk-product d-flex">
                                        <div class="image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('frontend/assets/images/products/product05.jpg') }}" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <p class="product-title"><a href="single-product.html">Hummingbird printed t-shirt</a></p>
                                            <p class="product-price">
                                                <span class="main-price discounted">$75.90</span>
                                                <span class="discounted-price">$69.83</span>
                                            </p>
                                            <div class="rating rating-product-style-2">
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--=======  End of single product  =======-->
                                </div>
                                <div class="col">
                                    <!--=======  single product  =======-->

                                    <div class="ptk-product d-flex">
                                        <div class="image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('frontend/assets/images/products/product06.jpg') }} " class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <p class="product-title"><a href="single-product.html">Field Messenger</a></p>
                                            <p class="product-price">
                                                <span class="main-price discounted">$75.90</span>
                                                <span class="discounted-price">$69.83</span>
                                            </p>
                                            <div class="rating rating-product-style-2">
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--=======  End of single product  =======-->
                                </div>
                                <div class="col">
                                    <!--=======  single product  =======-->

                                    <div class="ptk-product d-flex">
                                        <div class="image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('frontend/assets/images/products/product07.jpg') }} " class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <p class="product-title"><a href="single-product.html">Hummingbird printed t-shirt</a></p>
                                            <p class="product-price">
                                                <span class="main-price discounted">$75.90</span>
                                                <span class="discounted-price">$69.83</span>
                                            </p>
                                            <div class="rating rating-product-style-2">
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--=======  End of single product  =======-->
                                </div>
                                <div class="col">
                                    <!--=======  single product  =======-->

                                    <div class="ptk-product d-flex">
                                        <div class="image">
                                            <a href="single-product.html">
                                                <img src="{{ asset('frontend/assets/images/products/product08.jpg') }} " class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <p class="product-title"><a href="single-product.html">Teton Pullover Hoo</a></p>
                                            <p class="product-price">
                                                <span class="main-price discounted">$75.90</span>
                                                <span class="discounted-price">$69.83</span>
                                            </p>
                                            <div class="rating rating-product-style-2">
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star active"></i>
                                                <i class="lnr lnr-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--=======  End of single product  =======-->
                                </div>
                            </div>

                            <!--=======  End of popular product slider  =======-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of deal and propular product area  ======-->

    <!--=============================================
    =            container width banner         =
    =============================================-->

    <div class="containerwidth-banner-area mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="shop-left-sidebar.html">
                        <div class="banner containerwidth-banner-bg containerwidth-banner-bg-1">
                            <div class="row  h-100">
                                <div class="col-lg-4 offset-lg-8 col-md-12">
                                    <div class="banner-content d-flex flex-column align-items-center align-items-lg-start  justify-content-center h-100">
                                        <p class="normal-text">Living Room Furniture</p>
                                        <p class="color-text">Up to  50% Off</p>
                                        <p class="underline-text">Shop The Latest Style</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of container width banner  ======-->

    <!--=============================================
    =            Top selling product section         =
    =============================================-->

    <div class="top-selling-product-area mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-40">
                    <div class="section-title">
                        <h2>Top <span>Selling</span> Products</h2>
                        <p>Browse the collection of our top selling, You will definitely find what you are looking for.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  top selling product slider container  =======-->

                    <div class="ptk-slider top-selling-product-slider-container">

                        <div class="col">
                            <!--=======  single product  =======-->

                            <div class="ptk-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product01.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Field Messenger</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of single product  =======-->
                        </div>

                        <div class="col">
                            <!--=======  single product  =======-->

                            <div class="ptk-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product02.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Teton Pullover Hoo</a></p>
                                    <p class="product-price">
                                        <span class="main-price">$75.90</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of single product  =======-->
                        </div>

                        <div class="col">
                            <!--=======  single product  =======-->

                            <div class="ptk-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product03.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Hummingbird printed t-shirt</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of single product  =======-->
                        </div>

                        <div class="col">
                            <!--=======  single product  =======-->

                            <div class="ptk-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product04.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                        <span class="new-badge">NEW</span>
                                        <span class="discount-badge">-8%</span>
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Aim Analog</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of single product  =======-->
                        </div>

                        <div class="col">
                            <!--=======  single product  =======-->

                            <div class="ptk-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img src="{{ asset('frontend/assets/images/products/product05.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                    <!--=======  hover icons  =======-->

                                    <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container"><i class="lnr lnr-eye"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a>
                                    <a class="hover-icon" href="#"><i class="lnr lnr-cart"></i></a>

                                    <!--=======  End of hover icons  =======-->

                                    <!--=======  badge  =======-->

                                    <div class="product-badge">
                                    </div>

                                    <!--=======  End of badge  =======-->

                                </div>
                                <div class="content">
                                    <p class="product-title"><a href="single-product.html">Mug Today is a good day</a></p>
                                    <p class="product-price">
                                        <span class="main-price discounted">$75.90</span>
                                        <span class="discounted-price">$69.83</span>
                                    </p>
                                </div>
                                <div class="rating">
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star active"></i>
                                    <i class="lnr lnr-star"></i>
                                </div>
                            </div>

                            <!--=======  End of single product  =======-->
                        </div>

                    </div>

                    <!--=======  End of top selling product slider container  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Top selling product section  ======-->


    <!--=============================================
    =            Blog slider section         =
    =============================================-->

    <div class="blog-slider-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-40">
                    <div class="section-title">
                        <h2>Our <span>Blog</span> Posts</h2>
                        <p>Do you want to present posts in the best way to highlight interesting moments of your blog?</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--=============================================
                    =            Blog slider container         =
                    =============================================-->

                    <div class="blog-post-slider-container ptk-slider">

                        <div class="col">
                            <!--=======  single slider post  =======-->

                            <div class="single-slider-blog-post">
                                <div class="image">
                                    <a href="blog-post-right-sidebar.html">
                                        <img src="{{ asset('frontend/assets/images/slider/blog/01.jpg') }} " class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <p class="blog-title"><a href="blog-post-right-sidebar.html">Typi non habent claritatem insitam</a></p>
                                    <a href="blog-post-right-sidebar.html" class="readmore-btn">Read More</a>
                                </div>
                            </div>

                            <!--=======  End of single slider post  =======-->
                        </div>

                        <div class="col">
                            <!--=======  single slider post  =======-->

                            <div class="single-slider-blog-post">
                                <div class="image">
                                    <a href="blog-post-right-sidebar.html">
                                        <img src="{{ asset('frontend/assets/images/slider/blog/02.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <p class="blog-title"><a href="blog-post-right-sidebar.html">Typi non habent claritatem insitam</a></p>
                                    <a href="blog-post-right-sidebar.html" class="readmore-btn">Read More</a>
                                </div>
                            </div>

                            <!--=======  End of single slider post  =======-->
                        </div>

                        <div class="col">
                            <!--=======  single slider post  =======-->

                            <div class="single-slider-blog-post">
                                <div class="image">
                                    <a href="blog-post-right-sidebar.html">
                                        <img src="{{ asset('frontend/assets/images/slider/blog/03.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <p class="blog-title"><a href="blog-post-right-sidebar.html">Typi non habent claritatem insitam</a></p>
                                    <a href="blog-post-right-sidebar.html" class="readmore-btn">Read More</a>
                                </div>
                            </div>

                            <!--=======  End of single slider post  =======-->
                        </div>

                        <div class="col">
                            <!--=======  single slider post  =======-->

                            <div class="single-slider-blog-post">
                                <div class="image">
                                    <a href="blog-post-right-sidebar.html">
                                        <img src="{{ asset('frontend/assets/images/slider/blog/04.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <p class="blog-title"><a href="blog-post-right-sidebar.html">Typi non habent claritatem insitam</a></p>
                                    <a href="blog-post-right-sidebar.html" class="readmore-btn">Read More</a>
                                </div>
                            </div>

                            <!--=======  End of single slider post  =======-->
                        </div>

                    </div>


                    <!--=====  End of Blog slider container  ======-->
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Blog slider section  ======-->


    <!--=============================================
    =            instagram section         =
    =============================================-->

    <div class="instagram-section mb-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-40">
                    <div class="section-title instagram-title">
                        <h2>#Pataku Instagram</h2>
                        <p><a href="#" target="_blank">Follow our instagram</a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  instagram slider container  =======-->

                    <div class="ptk-slider instagram-slider-container">

                        <div class="col">
                            <!--=======  single insta item  =======-->

                            <div class="single-insta-item">
                                <a href="{{ asset('frontend/assets/images/instagram/01.jpg') }} " class="big-image-popup">
                                    <img src="{{ asset('frontend/assets/images/instagram/01.jpg') }}" class="img-fluid" alt="">
                                </a>
                            </div>

                            <!--=======  End of single insta item  =======-->
                        </div>
                        <div class="col">
                            <!--=======  single insta item  =======-->

                            <div class="single-insta-item">
                                <a href="{{ asset('frontend/assets/images/instagram/02.jpg') }}" class="big-image-popup">
                                    <img src="{{ asset('frontend/assets/images/instagram/02.jpg') }} " class="img-fluid" alt="">
                                </a>
                            </div>

                            <!--=======  End of single insta item  =======-->
                        </div>
                        <div class="col">
                            <!--=======  single insta item  =======-->

                            <div class="single-insta-item">
                                <a href="{{ asset('frontend/assets/images/instagram/03.jpg') }}" class="big-image-popup">
                                    <img src="{{ asset('frontend/assets/images/instagram/03.jpg') }}" class="img-fluid" alt="">
                                </a>
                            </div>

                            <!--=======  End of single insta item  =======-->
                        </div>
                        <div class="col">
                            <!--=======  single insta item  =======-->

                            <div class="single-insta-item">
                                <a href="{{ asset('frontend/assets/images/instagram/04.jpg') }} " class="big-image-popup">
                                    <img src="{{ asset('frontend/assets/images/instagram/04.jpg') }} " class="img-fluid" alt="">
                                </a>
                            </div>

                            <!--=======  End of single insta item  =======-->
                        </div>
                        <div class="col">
                            <!--=======  single insta item  =======-->

                            <div class="single-insta-item">
                                <a href="{{ asset('frontend/assets/images/instagram/05.jpg') }}" class="big-image-popup">
                                    <img src="{{ asset('frontend/assets/images/instagram/05.jpg') }} " class="img-fluid" alt="">
                                </a>
                            </div>

                            <!--=======  End of single insta item  =======-->
                        </div>

                    </div>

                    <!--=======  End of instagram slider container  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of instagram section  ======-->



@section('modal')

    @include('frontend.partials.modal')
@endsection()


































@endsection