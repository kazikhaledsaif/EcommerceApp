@extends('frontend.layouts.master')

@section('title' , 'Home')

@section('content')



    <!--=============================================
=            Hero Area One         =
=============================================-->

    <div class="hero-area pt-15 mb-80">
        <div class="">

            <div class="row mr-0 ml-0">
                <div class="col-lg-12 pl-0 pr-0">
                    <!--=======  slider container  =======-->

                    <div class="slider-container">
                        <!--=======  hero slider one  =======-->

                        <div class="hero-slider-one">
                            <!--=======  slider item  =======-->

                            @foreach ($sliders as $slider)

                                <?php
                                $attr =  asset('uploads/'.$slider->img);
                                $at=   str_replace('\\', '/',$attr);
                                ?>

                                {{-- <div class="hero-slider-item" style="background-image: url({{ asset('uploads/'.$slider->img)  }})"> --}}
                                {{-- <div class="hero-slider-item" style="background-image: url({{ Voyager::image( $slider->imge ) }})"> --}}
                                {{-- <div class="hero-slider-item slider-bg-1" > --}}
                                <div class="hero-slider-item  " style="background-image: url({{ $at }})">
                                    <!--=======  slider content  =======-->

                                    <div class="slider-content  d-flex flex-column justify-content-center align-items-start h-100">
                                        <p>{{ $slider->detail}}</p>
                                        <h1>{{ $slider->title1 }} <span> {{ $slider->title2 }} </span></h1>
                                        <a href="/shop/{{ $slider->slug }}" class="pataku-btn slider-btn-1">SHOP NOW</a>
                                    </div>

                                    <!--=======  End of slider content  =======-->
                                </div>
                        @endforeach
                        <!--=======  End of slider item  =======-->
                            <!--=======  slider item  =======-->



                            <!--=======  End of slider item  =======-->

                        </div>

                        <!--=======  End of hero slider one  =======-->
                    </div>

                    <!--=======  End of slider container  =======-->
                </div>
            </div>

            <div class="row mr-0 ml-0">
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


                @if(!$featuredCategory->isEmpty())
                    <div class="col-lg-6 col-md-6 mb-sm-30">

                        <div class="banner">
                            <a href="/shop?category={{$featuredCategory[0]->slug}}">
                                <img src="{{ asset('uploads/'.$featuredCategory[0]->image) }}" class="img-fluid" alt="">
                            </a>
                            <span class="banner-category-title">
							<a href="/shop?category={{$featuredCategory[0]->slug}}">{{$featuredCategory[0]->name}}</a>
						</span>
                        </div>


                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 mb-30">

                                <div class="banner">
                                    <a href="/shop?category={{$featuredCategory[1]->slug}}">
                                        <img src="{{ asset('uploads/'.$featuredCategory[1]->image) }}" class="img-fluid extra_image" alt="">
                                    </a>
                                    <span class="banner-category-title">
									<a href="/shop?category={{$featuredCategory[1]->slug}}">{{$featuredCategory[1]->name}}</a>
								</span>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">


                                <div class="banner">
                                    <a href="/shop?category={{$featuredCategory[2]->slug}}">
                                        <img  src="{{ asset('uploads/'.$featuredCategory[2]->image) }}" class="img-fluid " alt="">
                                    </a>
                                    <span class="banner-category-title">
									<a href="/shop?category={{$featuredCategory[2]->slug}}">{{$featuredCategory[2]->name}}</a>
								</span>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">

                                <div class="banner">
                                    <a href="/shop?category={{$featuredCategory[3]->slug}}">
                                        <img src="{{ asset('uploads/'.$featuredCategory[3]->image) }}" class="img-fluid" alt="">
                                    </a>
                                    <span class="banner-category-title">
									<a href="/shop?category={{$featuredCategory[3]->slug}}">{{$featuredCategory[3]->name}}</a>
								</span>
                                </div>

                            </div>
                        </div>
                    </div>

                @endif

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

                        @foreach($new_products as $new)

                            <div class="col">
                                <!--=======  single product  =======-->

                                <div class="ptk-product">
                                    <div class="image">
                                        <form action="{{route('frontend.cart.store')}}" id="link-cart{{ $new->id }}" method="POST">
                                            <a  href="{{route('frontend.shop.show',$new->slug)}}" >
                                                <img src="{{ asset('uploads/'.$new->product_image)  }}" class="img-fluid home-thumb" alt="">
                                            </a>
                                            <!--=======  hover icons  =======-->

                                            <a class="hover-icon" data-target="#quick-view-modal-container{{ $new->id }}" data-toggle="modal"
                                               href="#"><i class="lnr lnr-eye"></i></a>

                                            <a class="hover-icon" href="javascript:{}"
                                               onclick="document.getElementById('link-wish{{ $new->id }}').submit()"><i class="lnr lnr-heart"></i></a>
                                            <a class="hover-icon" href="javascript:{}"
                                               onclick="document.getElementById('link-cart{{ $new->id }}').submit()"><i class="lnr lnr-cart"></i></a>

                                            {{csrf_field()}}
                                            <input type="hidden" name="id" value="{{ $new->id }}">
                                            <input type="hidden" name="name" value="{{ $new->name }}">
                                            @if($new->discount_price == 0)
                                                <input type="hidden" name="price" value="{{ $new->regular_price }}">
                                            @else
                                                <input type="hidden" name="price" value="{{ $new->discount_price }}">

                                            @endif
                                            <input type="hidden" name="quantity" id="quantity"  min="1"  value="1" >
                                        </form>

                                        <form  id="link-wish{{ $new->id }}" action="{{route('frontend.wishlist.store')}}" method="POST">
                                            {{csrf_field()}}

                                            @if (auth()->user())
                                                <input type="hidden" name="user_id" value="{{  auth()->user()->id }}  ">
                                            @endif

                                            <input type="hidden" name="id" value="{{ $new->id }}">
                                            <input type="hidden" name="name" value="{{ $new->name }}">

                                            @if($new->discount_price == 0)
                                                <input type="hidden" name="price" value="{{ $new->regular_price }}">
                                            @else
                                                <input type="hidden" name="price" value="{{ $new->discount_price }}">

                                            @endif
                                            {{--      <button  id="submit" type="submit"><i class="fa fa-heart"></i> Add to wishlist</button>--}}
                                        </form>
                                        <!--=======  End of hover icons  =======-->

                                        <!--=======  badge  =======-->

                                        <div class="product-badge">
                                            @if ($new->badge)
                                                <span class="new-badge">{{ $new->badge}}</span>
                                            @endif
                                            @if ($new->percentage != null)
                                                <span class="discount-badge">
                                        -{{ $new->percentage }}%
                                    </span>@endif
                                        </div>
                                        <!--=======  End of badge  =======-->

                                    </div>
                                    <div class="content">
                                        <p class="product-title"><a href="{{route('frontend.shop.show',$new->slug)}}" target="_blank">{{$new->name}}</a></p>
                                        <p class="product-price">
                                            @if( $new->discount_price == 0 )
                                                <span class="main-price"> ${{ $new->regular_price }}</span>
                                            @else
                                                <span class="main-price discounted">${{ $new->regular_price }}</span>
                                                <span class="discounted-price"> ${{ $new->discount_price }}</span>
                                            @endif

                                        </p>
                                    </div>

                                </div>

                                <!--=======  End of single product  =======-->
                            </div>

                        @endforeach



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
                        <a href="/shop">View our products <i class="fa fa-angle-right"></i></a>
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
                                @foreach($weekly_product as $new)

                                    @php

                                        $countdown = $new->weekly_deal;
                                        $countdown = date('Y-m-d',strtotime($countdown . "+1 days"));

                                    @endphp
                                    <div class="col">
                                        <!--=======  single product  =======-->
                                        <div class="product-countdown" data-countdown="{{ $countdown }}"></div>

                                        <div class="ptk-product">
                                            <div class="image">
                                                <a href="{{route('frontend.shop.show',$new->slug)}}">
                                                    <img src="{{ asset('uploads/'.$new->product_image)  }}" class="img-fluid home-thumb" alt="">
                                                </a>
                                                <!--=======  hover icons  =======-->


                                                <!--=======  End of hover icons  =======-->

                                                <!--=======  badge  =======-->

                                                <div class="product-badge">
                                                    @if ($new->badge)
                                                        <span class="new-badge">{{ $new->badge}}</span>
                                                    @endif
                                                    @if ($new->percentage != null)
                                                        <span class="discount-badge">
                                        -{{ $new->percentage }}%
                                    </span>@endif
                                                </div>

                                                <!--=======  End of badge  =======-->

                                            </div>
                                            <div class="content">
                                                <p class="product-title"><a href="{{route('frontend.shop.show',$new->slug)}}">{{$new->name}}</a></p>
                                                <p class="product-price">
                                                    @if( $new->discount_price == 0 )
                                                        <span class="main-price"> ${{ $new->regular_price }}</span>
                                                    @else
                                                        <span class="main-price discounted">${{ $new->regular_price }}</span>
                                                        <span class="discounted-price"> ${{ $new->discount_price }}</span>
                                                    @endif

                                                </p>
                                            </div>

                                        </div>

                                        <!--=======  End of single product  =======-->
                                    </div>
                                @endforeach

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
                                @foreach($random as $new)
                                    <div class="col">
                                        <!--=======  single product  =======-->

                                        <div class="ptk-product d-flex">
                                            <div class="image">
                                                <a href="{{route('frontend.shop.show',$new->slug)}}">
                                                    <img src="{{ asset('uploads/'.$new->product_image)  }}" class="img-fluid " alt="">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <p class="product-title"><a href="{{route('frontend.shop.show',$new->slug)}}">{{$new->name}}</a></p>
                                                <p class="product-price">
                                                    @if( $new->discount_price == 0 )
                                                        <span class="main-price"> ${{ $new->regular_price }}</span>
                                                    @else
                                                        <span class="main-price discounted">${{ $new->regular_price }}</span>
                                                        <span class="discounted-price"> ${{ $new->discount_price }}</span>
                                                    @endif

                                                </p>
                                            </div>
                                        </div>

                                        <!--=======  End of single product  =======-->
                                    </div>
                                @endforeach

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
                    <a href="/shop">
                        <div class="banner containerwidth-banner-bg containerwidth-banner-bg-2">
                            <div class="row  h-100">
                                <div class="col-lg-4 offset-lg-8 col-md-12">
                                    <div class="banner-content d-flex flex-column align-items-center align-items-lg-start  justify-content-center h-100">
                                        <p class="normal-text">Dining Room Furniture</p>
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

                        @if(is_null($topsell))
                            // whatever you need to do here
                        @else
                        @foreach($topsell as $top)



                            <div class="col">
                                <!--=======  single product  =======-->

                                <div class="ptk-product">
                                    <div class="image">
                                        <form action="{{route('frontend.cart.store')}}" id="link-cart{{ $top->product_id }}" method="POST">
                                            <a href="{{route('frontend.shop.show',$top->slug)}}">
                                                <img src="{{ asset('uploads/'.$top->product_image)  }}" class="img-fluid " alt="">
                                            </a>

                                            <!--=======  hover icons  =======-->

                                            <!--=======  hover icons  =======-->

                                            <a class="hover-icon" data-target="#quick-view-modal-container{{ $top->product_id }}" data-toggle="modal"
                                               href="#"><i class="lnr lnr-eye"></i></a>

                                            <a class="hover-icon" href="javascript:{}"
                                               onclick="document.getElementById('link-wish{{ $top->product_id }}').submit()"><i class="lnr lnr-heart"></i></a>
                                            <a class="hover-icon" href="javascript:{}"
                                               onclick="document.getElementById('link-cart{{ $top->product_id }}').submit()"><i class="lnr lnr-cart"></i></a>

                                            {{csrf_field()}}
                                            <input type="hidden" name="id" value="{{ $top->product_id }}">
                                            <input type="hidden" name="name" value="{{ $top->name }}">
                                            @if($top->discount_price == 0)
                                                <input type="hidden" name="price" value="{{ $top->regular_price }}">
                                            @else
                                                <input type="hidden" name="price" value="{{ $top->discount_price }}">

                                            @endif
                                            <input type="hidden" name="quantity" id="quantity"  min="1"  value="1" >
                                        </form>

                                        <form  id="link-wish{{ $top->product_id }}" action="{{route('frontend.wishlist.store')}}" method="POST">
                                            {{csrf_field()}}

                                            @if (auth()->user())
                                                <input type="hidden" name="user_id" value="{{  auth()->user()->id }}  ">
                                            @endif

                                            <input type="hidden" name="id" value="{{ $top->product_id }}">
                                            <input type="hidden" name="name" value="{{ $top->name }}">

                                            @if($new->discount_price == 0)
                                                <input type="hidden" name="price" value="{{ $top->regular_price }}">
                                            @else
                                                <input type="hidden" name="price" value="{{ $top->discount_price }}">

                                            @endif
                                            {{--      <button  id="submit" type="submit"><i class="fa fa-heart"></i> Add to wishlist</button>--}}
                                        </form>

                                        <!--=======  End of hover icons  =======-->

                                        <!--=======  badge  =======-->

                                        <div class="product-badge">
                                            @if ($top->badge)
                                                <span class="new-badge">{{ $top->badge}}</span>
                                            @endif
                                            @if ($top->percentage != null)
                                                <span class="discount-badge">
                                        -{{ $top->percentage }}%
                                    </span>@endif
                                        </div>

                                        <!--=======  End of badge  =======-->

                                    </div>
                                    <div class="content">
                                        <p class="product-title"><a href="{{route('frontend.shop.show',$new->slug)}}">{{$top->name}}</a></p>
                                        <p class="product-price">
                                            @if( $top->discount_price == 0 )
                                                <span class="main-price"> ${{ $top->regular_price }}</span>
                                            @else
                                                <span class="main-price discounted">${{ $top->regular_price }}</span>
                                                <span class="discounted-price"> ${{ $top->discount_price }}</span>
                                            @endif

                                        </p>
                                    </div>
                                    {{--    <div class="rating">
                                            <i class="lnr lnr-star active"></i>
                                            <i class="lnr lnr-star active"></i>
                                            <i class="lnr lnr-star active"></i>
                                            <i class="lnr lnr-star active"></i>
                                            <i class="lnr lnr-star"></i>
                                        </div>--}}
                                </div>

                                <!--=======  End of single product  =======-->
                            </div>

                        @endforeach
                        @endif
                    </div>

                    <!--=======  End of top selling product slider container  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Top selling product section  ======-->

    <!--=============================================
    =            instagram section         =
    =============================================-->

    <div class="instagram-section mb-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-40">
                    <div class="section-title instagram-title">
                        <h2>Apply For Loan</h2>
                        <p><a href="#" target="_blank">Check our loan partners</a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  instagram slider container  =======-->

                    <div class="ptk-slider instagram-slider-container">

                        <div class="col">
                            <!--=======  single insta item  =======-->

                            <div class="single-item">
                                <a target="_blank" href="https://businesscenter.synchronybusiness.com/portal/home" class=" ">
                                    <img src="{{ asset('frontend/images/banners/1.png') }}" class="img-fluid" alt="">
                                </a>
                            </div>

                            <!--=======  End of single insta item  =======-->
                        </div>
                        <div class="col">
                            <!--=======  single insta item  =======-->

                            <div class="single-item">
                                <a target="_blank" href="https://customer.acimacredit.com/" class=" ">
                                    <img src="{{ asset('frontend/images/banners/2.png') }}" class="img-fluid" alt="">
                                </a>
                            </div>

                            <!--=======  End of single insta item  =======-->
                        </div>
                        <div class="col">
                            <!--=======  single insta item  =======-->

                            <div class="single-item">
                                <a target="_blank" href="https://www.acmecorp.com/customer/account/login/" class=" ">
                                    <img src="{{ asset('frontend/images/banners/3.png') }}" class="img-fluid" alt="">
                                </a>
                            </div>

                            <!--=======  End of single insta item  =======-->
                        </div>
                        <div class="col">
                            <!--=======  single insta item  =======-->

                            <div class="single-item">
                                <a target="_blank" href="https://app.okinus.com/application.Applicant?utm_source=portal&utm_medium=web&storeguid=0c0bcb39-0ae4-4922-a798-d3e8368044ab&homeurl=https%3A%2F%2Fportal.okinus.com%2Fapplications&landingUrl=https%3A%2F%2Fportal.okinus.com%2Flanding&leaseurl=lease&dealerId=4e51cf95-8848-4021-98b9-21976537bdef&return=https%3A%2F%2Fportal.okinus.com" class=" ">
                                    <img src="{{ asset('frontend/images/banners/4.png') }}" class="img-fluid" alt="">
                                </a>
                            </div>

                            <!--=======  End of single insta item  =======-->
                        </div>
                        <div class="col">
                            <!--=======  single insta item  =======-->

                            <div class="single-item">
                                <a target="_blank" href="https://www.progressivelp.com/SPNEW/StorePortal/User/Logon" class=" ">
                                    <img src="{{ asset('frontend/images/banners/5.png') }}" class="img-fluid" alt="">
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

    <!--=============================================
    =            Quick view modal         =
    =============================================-->
    @if(is_null($topsell))
        // whatever you need to do here
    @else
    @foreach($topsell as $top)
        <div aria-hidden="true" class="modal fade quick-view-modal-container" id="quick-view-modal-container{{ $top->product_id }}"
             role="dialog" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12">
                                <!-- product quickview image gallery -->
                                <div class="product-image-slider quickview-product-image-slider flex-row-reverse">
                                    <!--Modal Tab Content Start-->
                                    <div class="tab-content product-large-image-list quickview-product-large-image-list">
                                        <div class="tab-pane fade show active"
                                             id="single-slide-quick-1" role="tabpanel" aria-labelledby="single-slide-tab-quick-1">
                                            <!--Single Product Image Start-->
                                            <div class="single-product-img img-full">
                                                <img src="{{ asset('/'.$top->product_image)  }}"
                                                     class="img-fluid" alt="{{ $top->name }}">
                                            </div>
                                            <!--Single Product Image End-->
                                        </div>
                                    </div>
                                    <!--Modal Content End-->
                                    <!--Modal Tab Menu Start-->
                                    <!--Modal Tab Menu End-->
                                </div>
                                <!-- end of product quickview image gallery -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12">
                                <!-- product quick view description -->
                                <div class="product-feature-details">
                                    <h2 class="product-title mb-15">{{ $top->name }}</h2>

                                    <h2 class="product-price mb-15">
                                        @if( $new->discount_price == 0 )
                                            <span class="main-price"> ${{ $top->regular_price }}</span>
                                        @else
                                            <span class="main-price discounted">${{ $top->regular_price }}</span>
                                            <span class="discounted-price"> ${{ $top->discount_price }}</span>
                                        @endif

                                        {{--<span class="discount-percentage">Save 8%</span>--}}
                                    </h2>

                                    <p class="product-description mb-20">
                                        {{ $top->details }}
                                    </p>


                                    <div class="cart-buttons mb-20">

                                        <form action="{{route('frontend.cart.store')}}" method="POST">
                                            {{csrf_field()}}
                                            <div>
                                                <div class="pro-qty mr-10">

                                                    <div class="pro-qty mr-10">
                                                        <input type="text" name="quantity" id="quantity" min="1" value="1" max="2" required="">
                                                    </div>

                                                </div>
                                                <div class="add-to-cart-btn">


                                                    <input type="hidden" name="id" value="{{ $top->product_id }}">
                                                    <input type="hidden" name="quantity" value="{{  1}}">
                                                    <input type="hidden" name="name" value="{{ $top->name }}">



                                                    @if($top->discount_price == 0)
                                                        <input type="hidden" name="price" value="{{ $top->regular_price }}">
                                                    @else
                                                        <input type="hidden" name="price" value="{{ $top->discount_price }}">

                                                    @endif



                                                    <button type="submit" class="pataku-btn">  <i class="fa fa-shopping-cart"></i> Add to Cart</button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                    <div class="social-share-buttons">
                                        <h3>share this product</h3>
                                  {{--      <ul>
                                            <li><a target="_blank" class="twitter" href="https://twitter.com/home?status=check+this+amazing+furniture+http://furniturevilletexas.com/shop/{{ $top->slug }}"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=furniturevilletexas.com/shop/{{ $top->slug }}"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" class="google-plus" href="https://plus.google.com/share?url=furniturevilletexas.com/shop/{{ $top->slug }}"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>--}}
                                    </div>
                                </div>
                                <!-- end of product quick view description -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endforeach

    @endif
    <!--=====  End of Quick view modal  ======-->

    <!--=============================================
    =            Quick view modal         =
    =============================================-->
    @foreach($new_products as $product)
        <div class="modal fade quick-view-modal-container" id="quick-view-modal-container{{ $product->id }}"
             tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12">
                                <!-- product quickview image gallery -->
                                <div class="product-image-slider quickview-product-image-slider flex-row-reverse">
                                    <!--Modal Tab Content Start-->
                                    <div class="tab-content product-large-image-list quickview-product-large-image-list">
                                        <div class="tab-pane fade show active" id="single-slide-quick-1" role="tabpanel" aria-labelledby="single-slide-tab-quick-1">
                                            <!--Single Product Image Start-->
                                            <div class="single-product-img img-full">
                                                <img src="{{ asset('uploads/'.$product->product_image)  }}"
                                                     class="img-fluid" alt="{{ $product->name }}">
                                            </div>
                                            <!--Single Product Image End-->
                                        </div>
                                    </div>
                                    <!--Modal Content End-->
                                    <!--Modal Tab Menu Start-->
                                    <!--Modal Tab Menu End-->
                                </div>
                                <!-- end of product quickview image gallery -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12">
                                <!-- product quick view description -->
                                <div class="product-feature-details">
                                    <h2 class="product-title mb-15">{{ $product->name }}</h2>

                                    <h2 class="product-price mb-15">
                                        @if( $product->discount_price == 0 )
                                            <span class="main-price"> ${{ $product->regular_price }}</span>
                                        @else
                                            <span class="main-price discounted">${{ $product->regular_price }}</span>
                                            <span class="discounted-price"> ${{ $product->discount_price }}</span>
                                        @endif

                                        {{--<span class="discount-percentage">Save 8%</span>--}}
                                    </h2>

                                    <p class="product-description mb-20">
                                        {{ $product->details }}
                                    </p>


                                    <div class="cart-buttons mb-20">
                                        <form action="{{route('frontend.cart.store')}}" method="POST">
                                            {{csrf_field()}}
                                            <div>
                                                <div class="pro-qty mr-10">

                                                    <div class="pro-qty mr-10">
                                                        <input type="text" name="quantity" id="quantity" min="1" value="1" max="2" required="">
                                                    </div>

                                                </div>
                                                <div class="add-to-cart-btn">


                                                    <input type="hidden" name="id" value="{{$product->id  }}">
                                                    <input type="hidden" name="quantity" value="{{ 1}}">
                                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                                    @if($product->discount_price == 0)
                                                        <input type="hidden" name="price" value="{{ $product->regular_price }}">
                                                    @else
                                                        <input type="hidden" name="price" value="{{ $product->discount_price }}">

                                                    @endif


                                                    <button type="submit" class="pataku-btn">  <i class="fa fa-shopping-cart"></i> Add to Cart</button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                    <div class="social-share-buttons">
                                        <h3>share this product</h3>
                                   
                                    </div>
                                </div>
                                <!-- end of product quick view description -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--=====  End of Quick view modal  ======-->
    @endforeach


@section('modal')

    @include('frontend.partials.modal')
@endsection()


































@endsection