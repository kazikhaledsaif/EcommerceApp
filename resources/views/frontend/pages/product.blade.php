@extends('frontend.layouts.master')

@section('title', $product->name )

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
                            <li><a href="{{ route('frontend.shop.index') }}">Shop</a> <span class="separator">/</span></li>
                            <li class="active"> {{ $product->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Breadcrumb Area  ======-->


    <!--=============================================
    =            single product page content         =
    =============================================-->

    <div class="single-product-page-content mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-md-50 mb-sm-50">
                    <!-- single product tabstyle one image gallery -->
                    <div class="product-image-slider pts1-product-image-slider pts-product-image-slider pts1-product-image-slider flex-row-reverse">
                        <!--product large image start -->
                        <div class="tab-content product-large-image-list pts-product-large-image-list pts1-product-large-image-list" id="myTabContent">
                            <div class="tab-pane fade show active" id="single-slide-1" role="tabpanel" aria-labelledby="single-slide-tab-1">
                                <!--Single Product Image Start-->
                                <div class="single-product-img img-full">
                                    <img src="{{ asset('uploads/'.$product->product_image)  }}" class="img-fluid" alt="">
                                    <a href="{{ asset('uploads/'.$product->product_image)  }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <!--Single Product Image End-->
                            </div>

                            @if($product->gallery_image1 != "")
                                <div class="tab-pane fade" id="single-slide-2" role="tabpanel" aria-labelledby="single-slide-tab-2">
                                    <!--Single Product Image Start-->
                                    <div class="single-product-img img-full">
                                        <img src="{{ asset('uploads/'.$product->gallery_image1)  }}" class="img-fluid" alt="">
                                        <a href="{{ asset('uploads/'.$product->gallery_image1)  }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                    <!--Single Product Image End-->
                                </div>
                            @endif
                            @if($product->gallery_image2 != "")
                                <div class="tab-pane fade" id="single-slide-3" role="tabpanel" aria-labelledby="single-slide-tab-3">
                                    <!--Single Product Image Start-->
                                    <div class="single-product-img img-full">
                                        <img src="{{ asset('uploads/'.$product->gallery_image2)  }}" class="img-fluid" alt="">
                                        <a href="{{ asset('uploads/'.$product->gallery_image2)  }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                    <!--Single Product Image End-->
                                </div>
                            @endif
                            @if($product->gallery_image3 != "")
                                <div class="tab-pane fade" id="single-slide-4" role="tabpanel" aria-labelledby="single-slide-tab-4">
                                    <!--Single Product Image Start-->
                                    <div class="single-product-img img-full">
                                        <img src="{{ asset('uploads/'.$product->gallery_image3)  }}" class="img-fluid" alt="">
                                        <a href="{{ asset('uploads/'.$product->gallery_image3)  }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                    <!--Single Product Image End-->
                                </div>
                            @endif
                            @if($product->gallery_image4 != "")
                                <div class="tab-pane fade" id="single-slide-5" role="tabpanel" aria-labelledby="single-slide-tab-5">
                                    <!--Single Product Image Start-->
                                    <div class="single-product-img img-full">
                                        <img src="{{ asset('uploads/'.$product->gallery_image4)  }}" class="img-fluid" alt="">
                                        <a href="{{ asset('uploads/'.$product->gallery_image4)  }}" class="big-image-popup"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                    <!--Single Product Image End-->
                                </div>
                            @endif
                        </div>
                        <!--product large image End-->

                        <!--product small image slider Start-->
                        <div class="product-small-image-list pts-product-small-image-list pts1-product-small-image-list">
                            <div class="nav small-image-slider pts-small-image-slider pts1-small-image-slider" role="tablist">


                                <div class="single-small-image img-full">
                                    <a data-toggle="tab" id="single-slide-tab-1" href="#single-slide-1"><img src="{{ asset('uploads/'.$product->product_image)  }}"
                                                                                                             class="img-fluid" alt=""></a>
                                </div>

                                @if($product->gallery_image1 != "")
                                    <div class="single-small-image img-full">
                                        <a data-toggle="tab" id="single-slide-tab-2" href="#single-slide-2"><img src="{{ asset('uploads/'.$product->gallery_image1)  }}"
                                                                                                                 class="img-fluid" alt=""></a>
                                    </div>
                                @endif
                                @if($product->gallery_image2 != "")
                                    <div class="single-small-image img-full">
                                        <a data-toggle="tab" id="single-slide-tab-3" href="#single-slide-3"><img src="{{ asset('uploads/'.$product->gallery_image2)  }}"
                                                                                                                 class="img-fluid" alt=""></a>
                                    </div>
                                @endif
                                @if($product->gallery_image3 != "")
                                    <div class="single-small-image img-full">
                                        <a data-toggle="tab" id="single-slide-tab-4" href="#single-slide-4"><img src="{{ asset('uploads/'.$product->gallery_image3)  }}"
                                                                                                                 alt=""></a>
                                    </div>
                                @endif
                                @if($product->gallery_image4 != "")
                                    <div class="single-small-image img-full">
                                        <a data-toggle="tab" id="single-slide-tab-5" href="#single-slide-5"><img src="{{ asset('uploads/'.$product->gallery_image4)  }}"
                                                                                                                 alt=""></a>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!--product small image slider End-->
                    </div>
                    <!-- end of single product tabstyle one image gallery -->
                </div>
                <div class="col-lg-6">
                    <!--=======  single product details  =======-->

                    <div class="single-product-details-container">

                        <p class="product-title mb-15">{{ $product->name }}</p>
                        <!-- <p class="reference-text mb-15">Reference: demo_13</p> -->

                        <p class="product-price mb-30">
                            @if( $product->discount_price == 0 )
                                <span class="main-price"> ${{ $product->regular_price }}</span>
                            @else
                                <span class="main-price discounted">${{ $product->regular_price }}</span>
                                <span class="discounted-price"> ${{ $product->discount_price }}</span>
                            @endif
                        </p>
                        <p class="product-description mb-15">
                            {!! $product->details !!}
                        </p>

                        <form action="{{route('frontend.cart.store')}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">


                            @if($product->discount_price == 0)
                                <input type="hidden" name="price" value="{{ $product->regular_price }}">
                            @else
                                <input type="hidden" name="price" value="{{ $product->discount_price }}">

                            @endif


                            <div id="quantity_card" class="cart-buttons mb-30">
                                @if ($product->stock != 0)
                                    <p class="mb-15">Quantity : <span id="stock" > {{$product->stock }}</span></p>
                                    <div class="pro-qty mr-10">
                                        <input type="text" name="quantity" id="quantity" min="1" value="1" max="{{$product->stock}}" required="">

                                    </div>
                                    <a>
                                        <button type="submit" class="pataku-btn">  <i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                    </a>

                                @else
                                    <p class="mb-15 text-danger"> Out of Stock</p>
                                @endif


                            </div>
                        </form>
                        <p class="wishlist-link mb-30">
                        <form action="frontend.wishlist.store" method="POST">
                            {{csrf_field()}}

                            @if (auth()->user())
                                <input type="hidden" name="user_id" value="{{  auth()->user()->id }}  ">
                            @endif

                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">

                            @if($product->discount_price == 0)
                                <input type="hidden" name="price" value="{{ $product->regular_price }}">
                            @else
                                <input type="hidden" name="price" value="{{ $product->discount_price }}">

                            @endif
                            <button  id="submit" type="submit"><i class="fa fa-heart"></i> Add to wishlist</button>
                        </form>
                        </p>
                        <div class="social-share-buttons mb-30">
                            <p>Share</p>
                            <ul>
                                <li><a target="_blank" class="twitter" href="https://twitter.com/home?status=check+this+amazing+furniture+http://furniturevilletexas.com/shop/{{ $product->slug }}"><i class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank" class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=furniturevilletexas.com/shop/{{ $product->slug }}"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" class="google-plus" href="https://plus.google.com/share?url=furniturevilletexas.com/shop/{{ $product->slug }}"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="policy-list">
                         {{--   <ul>
                                <li> <img src="{{ asset('frontend/images/icons/shield.png') }} " alt=""><a href="{{ route('pages.privacy')}}"> Please read our Security Policy ! </a> </li>
                                <li> <img src="{{ asset('frontend/images/icons/truck.png') }} " alt=""> <a href="{{ route('pages.delivery')}}"> Please read our Delivery Policy ! </a> </li>
                                <li> <img src="{{ asset('frontend/images/icons/compare.png') }} " alt=""> <a href="{{ route('pages.refund')}}"> Please read our Return Policy ! </a> </li>
                            </ul>--}}
                        </div>
                    </div>

                    <!--=======  End of single product details  =======-->
                </div>
            </div>
        </div>
    </div>
    <!--=====  End of single product page content  ======-->


    <!--=============================================
    =            single product tab         =
    =============================================-->

    <div class="single-product-tab-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-slider-wrapper">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab"
                                   aria-selected="true">Description</a>
                                <a class="nav-item nav-link" id="features-tab" data-toggle="tab" href="#features" role="tab"
                                   aria-selected="false">Features</a>
                                <a class="nav-item nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab"
                                aria-selected="false">Reviews ({{ $review_count }})</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <p class="product-desc">{!! $product->description !!}</p>
                               </div>
                            <div class="tab-pane fade" id="features" role="tabpanel" aria-labelledby="features-tab">
                                <table class="table-data-sheet">
                                    <tbody>
                                    <tr class="odd">

                                        <td>Name</td>
                                        <td>{{ $product->feature_name }}</td>
                                    </tr>
                                    <tr class="even">

                                        <td>Color</td>
                                        <td>{{ $product->feature_color }}</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <div class="product-ratting-wrap">
                                    <div class="pro-avg-ratting">
                                        <h4>{{ $product->rating }} <span>(Overall)</span></h4>
                                        {{--<span>Based on {{ $review_count }} Comments</span>--}}
                                    </div>
                                    {{--<div class="ratting-list">--}}
                                        {{--<div class="sin-list float-left">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<span>(5)</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="sin-list float-left">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star-o"></i>--}}
                                            {{--<i class="fa fa-star-o"></i>--}}
                                            {{--<i class="fa fa-star-o"></i>--}}
                                            {{--<span>(0)</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="rattings-wrapper">
                                        @php($already_rated = 'false')
                                        @foreach($review as $rating)
                                            @auth
                                                @if( $rating->uid == auth()->user()->id )
                                                    @php($already_rated = 'true')
                                                @else
                                                    @php($already_rated = 'false')
                                                @endif
                                            @endauth
                                        <div class="sin-rattings">
                                            <div class="ratting-author">
                                                <h3>{{ $rating->name }}</h3>
                                                <div class="ratting-star">
                                                    @for($i=1; $i<=$rating->rating; $i++)
                                                        <i class="fa fa-star"></i>
                                                    @endfor
                                                    @if($rating->rating != round($rating->rating))
                                                            <i class="fa fa-star-half"></i>
                                                    @endif
                                                    <span>({{ $rating->rating }})</span>
                                                </div>
                                            </div>
                                            <p> {{ $rating->comment }}</p>
                                        </div>
                                        @endforeach

                                    </div>
                                    @guest
                                        <div class="ratting-form-wrapper fix">
                                            <h3>Login first to review</h3>
                                        </div>
                                    @else


                                        {{--@if($already_rated == 'true')--}}

                                        @if($already_rated == 'false')
                                            <div class="ratting-form-wrapper fix">
                                                <h3>Add your Comments</h3>
                                                <form action="{{ route('frontend.review.store') }} " method="post">
                                                    @csrf
                                                    <input type="hidden" name="pid" value="{{ $product->id }}">
                                                    <input type="hidden" name="uid" value="{{ Auth::id() }}">
                                                    <div class="ratting-form row">
                                                        <div class="col-12 mb-15">
                                                            <h5>Rating:</h5>
                                                            <div class="ratting-star fix">
                                                                <fieldset class="rating">
                                                                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                                                    <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Good 4 stars"></label>
                                                                    <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Above Average 3.5 stars"></label>
                                                                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Average 3 stars"></label>
                                                                    <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Below Average 2.5 stars"></label>
                                                                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title=" 2 stars"></label>
                                                                    <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="1.5 stars"></label>
                                                                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title=" 1 star"></label>
                                                                    <input type="radio" id="starhalf" name="rating" value=".5" /><label class="half" for="starhalf" title=" 0.5 stars"></label>
                                                                   </fieldset>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 mb-15">
                                                            <label for="your-review">Your Review:</label>
                                                            <textarea name="comment" id="your-review"
                                                                      placeholder="Write a review" ></textarea>
                                                        </div>
                                                        <div class="col-12">
                                                            <input value="add review" type="submit">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        @endif

                                        @endguest
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of single product tab  ======-->


    <!--=============================================
    =            related product slider         =
    =============================================-->

    <div class="related-product-area mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-40">
                    <div class="section-title">
                        <h2 class="mb-0">Related <span>Products</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  top selling product slider container  =======-->

                    <div class="ptk-slider related-product-slider-container">

                        @foreach($mightLikeProduct as $alikeProducts)
                            <div class="col">
                                <!--=======  single product  =======-->

                                <div class="ptk-product">
                                    <div class="image">
                                        <form action="{{route('frontend.cart.store')}}" id="link-cart{{ $alikeProducts->id }}" method="POST">
                                            <a href="{{route('frontend.shop.show',$alikeProducts->slug)}}">
                                                <img src="{{ asset('uploads/'.$alikeProducts->product_image)  }}" class="img-fluid shop-thumb" alt="{{ $alikeProducts->name }}">
                                            </a>
                                            <!--=======  hover icons  =======-->

                                            <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container{{ $alikeProducts->id }}"><i class="lnr lnr-eye"></i></a>
                                            <a class="hover-icon" href="javascript:{}"
                                               onclick="document.getElementById('link-wish{{ $alikeProducts->id }}').submit()"><i class="lnr lnr-heart"></i></a>

                                            <a class="hover-icon"  href="javascript:{}"
                                               onclick="document.getElementById('link-cart{{ $alikeProducts->id }}').submit()"><i class="lnr lnr-cart"></i></a>

                                            <!--=======  End of hover icons  =======-->
                                            {{csrf_field()}}
                                            <input type="hidden" name="id" value="{{ $alikeProducts->id }}">
                                            <input type="hidden" name="name" value="{{ $alikeProducts->name }}">

                                            @if($alikeProducts->discount_price == 0)
                                                <input type="hidden" name="price" value="{{ $alikeProducts->regular_price }}">
                                            @else
                                                <input type="hidden" name="price" value="{{ $alikeProducts->discount_price }}">

                                            @endif
                                            <input type="hidden" name="quantity" id="quantity"  min="1"  value="1" >
                                        </form>

                                        <form  id="link-wish{{ $alikeProducts->id }}" action="{{route('frontend.wishlist.store')}}" method="POST">
                                            {{csrf_field()}}

                                            @if (auth()->user())
                                                <input type="hidden" name="user_id" value="{{  auth()->user()->id }}  ">
                                            @endif

                                            <input type="hidden" name="id" value="{{ $alikeProducts->id }}">
                                            <input type="hidden" name="name" value="{{ $alikeProducts->name }}">

                                            @if($alikeProducts->discount_price == 0)
                                                <input type="hidden" name="price" value="{{ $alikeProducts->regular_price }}">
                                            @else
                                                <input type="hidden" name="price" value="{{ $alikeProducts->discount_price }}">

                                            @endif
                                            {{--      <button  id="submit" type="submit"><i class="fa fa-heart"></i> Add to wishlist</button>--}}
                                        </form>

                                        <!--=======  badge  =======-->

                                        <div class="product-badge">
                                            @if ($alikeProducts->badge)
                                                <span class="new-badge">{{ $alikeProducts->badge}}</span>
                                            @endif
                                            @if ($alikeProducts->percentage > 0)
                                                <span class="discount-badge">
                                        -{{ $alikeProducts->percentage }}%
                                    </span>@endif
                                        </div>
                                        <!--=======  End of badge  =======-->

                                    </div>
                                    <div class="content">
                                        <p class="product-title"><a href="{{route('frontend.shop.show',$alikeProducts->slug)}}">{{$alikeProducts->name}}</a></p>
                                        <p class="product-price">
                                            @if( $alikeProducts->discount_price == 0 )
                                                <span class="main-price"> ${{ $alikeProducts->regular_price }}</span>
                                            @else
                                                <span class="main-price discounted">${{ $alikeProducts->regular_price }}</span>
                                                <span class="discounted-price"> ${{ $alikeProducts->discount_price }}</span>
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
                    </div>

                    <!--=======  End of top selling product slider container  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of related product slider  ======-->


    <!--=============================================
    =            Quick view modal         =
    =============================================-->
    @foreach($mightLikeProduct as $product)
        <div class="modal fade quick-view-modal-container" id="quick-view-modal-container{{ $product->id }}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                            <div class="pro-qty mr-10">
                                                <input type="text" value="1">
                                            </div>
                                            <div class="add-to-cart-btn">


                                                <input type="hidden" name="id" value="{{ $product->id  }}">
                                                <input type="hidden" name="quantity" value="{{ 1}}">
                                                <input type="hidden" name="name" value="{{ $product->name }}">
                                                @if($product->discount_price == 0)
                                                    <input type="hidden" name="price" value="{{ $product->regular_price }}">
                                                @else
                                                    <input type="hidden" name="price" value="{{ $product->discount_price }}">

                                                @endif


                                                <button type="submit" class="pataku-btn">  <i class="fa fa-shopping-cart"></i> Add to Cart</button>

                                            </div>
                                        </form>
                                    </div>


                                    <div class="social-share-buttons">
                                        <h3>share this product</h3>
                                        <ul>
                                            <li><a target="_blank" class="twitter" href="https://twitter.com/home?status=check+this+amazing+furniture+http://furniturevilletexas.com/shop/{{ $product->slug }}"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=furniturevilletexas.com/shop/{{ $product->slug }}"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" class="google-plus" href="https://plus.google.com/share?url=furniturevilletexas.com/shop/{{ $product->slug }}"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
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


@endsection()


