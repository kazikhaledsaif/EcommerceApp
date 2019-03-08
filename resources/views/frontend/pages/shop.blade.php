@extends('frontend.layouts.master')
@section('title' , 'Shop')
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
                            <li><a href="/">Home</a> <span class="separator">/</span></li>
                            <li class="active"><a href="">Shop</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of Breadcrumb Area  ======-->


    <!--=============================================
    =            shop page content         =
    =============================================-->

    <div class="shop-page-content mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <!--=======  sidebar  =======-->

                    <div class="sidebar-container shop-sidebar-container">
                        <!--=======  single widget  =======-->

                        <div class="single-sidebar-widget mb-30">
                            <h3 class="sidebar-title">Categories</h3>
                            <!--=======  category dropdown  =======-->
                            <ul class="category-dropdown">
                                @foreach($categories as $category)
                                    <li><a href="{{route('frontend.shop.index', ['category' => $category->slug ])}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                            <!--=======  End of category dropdown  =======-->
                        </div>

                        <!--=======  End of single widget  =======-->

                        <!--=======  single widget  =======-->
                        <div class="single-sidebar-widget">
                            <h3 class="sidebar-title mb-30">Filter By</h3>

                            <div class="sub-widget mb-30">
                                <h3 class="sidebar-title">Price</h3>
                                <div class="category-container mb-30">
                                    <ul>
                                        <li>
                                            <label class="radio-container">

                                                <a href="{{route('frontend.shop.index', ['price_min' => 400,'price_max' => 999 ])}}"> $400.00 - $999.00
                                                    <input type="radio" name="radio" {{  Request::get('price_min') ==  '400' ? 'checked' : ''  }}>
                                                    <span class="checkmark"></span> </a>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio-container">
                                                <a href="{{route('frontend.shop.index', ['price_min' => 1000,'price_max' => 1499 ])}}"> $1000.00 - $1499.00
                                                    <input type="radio" name="radio" {{  Request::get('price_min') ==  '1000' ? 'checked' : ''  }}>
                                                    <span class="checkmark"></span></a>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio-container">
                                                <a href="{{route('frontend.shop.index', ['price_min' => 1500,'price_max' => 1999 ])}}"> $1500.00 - $1999.00
                                                    <input type="radio" name="radio" {{  Request::get('price_min') ==  '1500' ? 'checked' : ''  }}>
                                                    <span class="checkmark"></span></a>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radio-container">
                                                <a href="{{route('frontend.shop.index', ['price_min' => 2000,'price_max' => 4000 ])}}"> $2000.00 - $4000.00
                                                    <input type="radio" name="radio" {{  Request::get('price_min') ==  '2000' ? 'checked' : ''  }}>
                                                    <span class="checkmark"></span></a>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div>

                        <!--=======  End of single widget  =======-->
                    </div>

                    <!--=======  End of sidebar  =======-->
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <!--=======  shop header  =======-->

                    <div class="shop-header mb-20">

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-sm-20 d-flex align-items-center">
                                <!--=======  view mode  =======-->

                                <div class="view-mode-icons">
                                    <a class="active" href="#" data-target="grid"><i class="fa fa-th"></i></a>
                                    <a href="#" data-target="list"><i class="fa fa-list"></i></a>
                                </div>


                                <!--=======  End of view mode  =======-->

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column flex-sm-row justify-content-start justify-content-md-end align-items-sm-center">

                                <!--=======  Sort by dropdown  =======-->

                                <div class="sort-by-dropdown d-flex align-items-center mb-xs-10">
                                    <p class="mr-10 mb-0">Sort By: </p>
                                    <select name="sort-by" id="sort-by" class="nice-select"  onchange="location = this.value;">

                                        <option  value="{{route('frontend.shop.index', ['category' => request()->category,'sort'=>'low_high' ])}}">
                                            <a href=""> Price: Low to High</a></option>

                                        <option value="{{route('frontend.shop.index', ['category' => request()->category,'sort'=>'high_low' ])}}">
                                            <a href="{{route('frontend.shop.index', ['category' => request()->category,'sort'=>'high_low' ])}}"> Price: High to Low</a></option>

                                    </select>
                                </div>
                           {{--     <div class="sort-by-dropdown d-flex align-items-center mb-xs-10">
                                    <p class="mr-10 mb-0">Sort By: </p>
                                    <select name="sort-by" id="sort-by" class="nice-select">
                                        <option value="0">Sort By Popularity</option>
                                        <option value="0">Sort By Average Rating</option>
                                        <option value="0">Sort By Newness</option>
                                        <option value="0">Sort By Price: Low to High</option>
                                        <option value="0">Sort By Price: High to Low</option>
                                    </select>
                                </div>--}}
                                <!--=======  End of Sort by dropdown  =======-->


                            </div>
                        </div>
                    </div>

                    <!--=======  End of shop header  =======-->

                    <!--=======  shop product wrap   =======-->

                    <div class="shop-product-wrap grid row">

                        @foreach($products as $product)
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <!--=======  grid view product  =======-->

                                <div class="ptk-product shop-grid-view-product">
                                    <div class="image">
                                        <form action="{{route('frontend.cart.store')}}" id="link-cart{{ $product->id }}" method="POST">
                                            <a href="{{route('frontend.shop.show',$product->slug)}}">
                                                <img src="{{ asset('uploads/'.$product->product_image)  }}" class="img-fluid shop-thumb" alt="{{ $product->name }}">
                                            </a>
                                            <!--=======  hover icons  =======-->
                                            <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container{{ $product->id }}"><i class="lnr lnr-eye"></i></a>
                                            <!-- <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a> -->
                                            <a class="hover-icon" href="javascript:{}"
                                               onclick="document.getElementById('link-wish{{ $product->id }}').submit()"><i class="lnr lnr-heart"></i></a>

                                            <a class="hover-icon"  href="javascript:{}"
                                               onclick="document.getElementById('link-cart{{ $product->id }}').submit()"><i class="lnr lnr-cart"></i></a>
                                            <!-- <a class="hover-icon"  href="javascript:{}" onclick="form.submit();"><i class="lnr lnr-cart"></i></a> -->


                                            {{csrf_field()}}
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <input type="hidden" name="name" value="{{ $product->name }}">

                                            @if($product->discount_price == 0)
                                                <input type="hidden" name="price" value="{{ $product->regular_price }}">
                                            @else
                                                <input type="hidden" name="price" value="{{ $product->discount_price }}">

                                            @endif
                                            <input type="hidden" name="quantity" id="quantity"  min="1"  value="1" >
                                        </form>

                                        <form  id="link-wish{{ $product->id }}" action="{{route('frontend.wishlist.store')}}" method="POST">
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
                                            {{--      <button  id="submit" type="submit"><i class="fa fa-heart"></i> Add to wishlist</button>--}}
                                            </form>

                                            <!--=======  End of hover icons  =======-->

                                        <!--=======  badge  =======-->

                                        <div class="product-badge">
                                            @if ($product->badge)
                                                <span class="new-badge">{{ $product->badge}}</span>
                                            @endif
                                            @if ($product->percentage > 0)
                                                <span class="discount-badge">
                                        -{{ $product->percentage }}%
                                    </span>@endif
                                        </div>

                                        <!--=======  End of badge  =======-->

                                    </div>
                                    <div class="content">
                                        <p class="product-title"><a href="{{route('frontend.shop.show',$product->slug)}}">{{$product->name}}</a></p>
                                        <p class="product-price">
                                            @if( $product->discount_price == 0 )
                                                <span class="main-price"> ${{ $product->regular_price }}</span>
                                            @else
                                                <span class="main-price discounted">${{ $product->regular_price }}</span>
                                                <span class="discounted-price"> ${{ $product->discount_price }}</span>
                                            @endif

                                        </p>
                                    </div>
                                    <!-- <div class="rating">
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star active"></i>
                                        <i class="lnr lnr-star"></i>
                                    </div> -->
                                </div>

                                <!--=======  End of grid view product  =======-->

                                <!--=======  product list view  =======-->

                                <div class="ptk-product shop-list-view-product">
                                    <div class="image">
                                        <a href="{{route('frontend.shop.show',$product->slug)}}">
                                            <img src="{{ asset('uploads/'.$product->product_image)  }}" class="img-fluid shop-thumb" alt="">
                                        </a>

                                        <!--=======  badge  =======-->

                                        <div class="product-badge">
                                            @if ($product->badge)
                                                <span class="new-badge">{{ $product->badge}}</span>
                                            @endif
                                            @if ($product->percentage > 0)
                                                <span class="discount-badge">
                                        -{{ $product->percentage }}
                                    </span>@endif
                                        </div>

                                        <!--=======  End of badge  =======-->

                                    </div>
                                    <div class="content">
                                        <p class="product-title"><a href="{{route('frontend.shop.show',$product->slug)}}">{{$product->name}}</a></p>

                                        <p class="product-price">
                                            @if( $product->discount_price == 0 )
                                                <span class="main-price"> ${{ $product->regular_price }}</span>
                                            @else
                                                <span class="main-price discounted">${{ $product->regular_price }}</span>
                                                <span class="discounted-price"> ${{ $product->discount_price }}</span>
                                            @endif

                                        </p>
                                        <p class="product-description">{{$product->details}}</p>
                                        <!--=======  hover icons  =======-->
                                        <div class="hover-icons">
                                            {{--<a class="hover-icon quickview" id="quickmodal" href="#"--}}
                                            {{--data-pid="{{ $product->id }}" data-pname="{{ $product->name }}" data-price="{{ $product->regular_price }}"--}}
                                            {{--data-discount="{{ $product->discount_price }}" data-detail="{{ $product->details }}"--}}
                                            {{--data-image="{{ $product->product_image }}" data-slug="{{ $product->slug }}"--}}
                                            {{--data-url="{{ route('dynamicModal',['id'=>$product->id])}}">--}}
                                            {{--<i class="lnr lnr-eye"></i></a>--}}
                                            {{--<a href="{{ route('dynamicModal',['id'=>$product->id])}}" class="btn btn-default modal-global"><i class="lnr lnr-eye"></i></a>--}}
                                            <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container{{ $product->id }}"><i class="lnr lnr-eye"></i></a>

                                            <a class="hover-icon" href="javascript:{}"
                                               onclick="document.getElementById('link-wish{{ $product->id }}').submit()"><i class="lnr lnr-heart"></i></a>

                                            <a class="hover-icon"  href="javascript:{}"
                                               onclick="document.getElementById('link-cart{{ $product->id }}').submit()"><i class="lnr lnr-cart"></i></a>
                                            <!-- <a class="hover-icon"  href="javascript:{}" onclick="form.submit();"><i class="lnr lnr-cart"></i></a> -->

                                        </div>
                                        <!--=======  End of hover icons  =======-->
                                    </div>

                                </div>

                                <!--=======  End of product list view  =======-->
                            </div>
                        @endforeach



                    </div>

                    <!--=======  End of shop product wrap    =======-->

                    <!--=======  pagination  =======-->

                {{ $products->appends(request()->query())->links() }}

                <!--=======  End of pagination  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of shop page content  ======-->

    <div id="dynamic-content"></div>


    <!--=============================================
    =            Quick view modal         =
    =============================================-->
    @foreach($products as $product)
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


