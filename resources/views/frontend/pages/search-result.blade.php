@extends('frontend.layouts.master')

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
{{--                            <li class="active"><a >Search result: </a></li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
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



                        <!--=======  End of single widget  =======-->


                        <!--=======  End of single widget  =======-->
                    </div>

                    <!--=======  End of sidebar  =======-->
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <!--=======  shop header  =======-->

                    <div class="shop-header mb-20">
                        @if($products->isEmpty())
                            <h1>Sorry No Product Found</h1> <br><br>
                        @else
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-sm-20 d-flex align-items-center">
                                <!--=======  view mode  =======-->

                                <div class="view-mode-icons">
                                    <a class="active" href="#" data-target="grid"><i class="fa fa-th"></i></a>
                                    <a href="#" data-target="list"><i class="fa fa-list"></i></a>
                                </div>


                                <!--=======  End of view mode  =======-->

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
                                        {{--                                            <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container{{ $product->id }}"><i class="lnr lnr-eye"></i></a>--}}
                                        <!-- <a class="hover-icon" href="#"><i class="lnr lnr-heart"></i></a> -->
                                            {{--                                            <a class="hover-icon" href="{{route('frontend.shop.show',$product->slug)}}" ><i class="lnr lnr-eye"></i></a>--}}

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

                                            @if (auth()->guard('user')->user())
                                                <input type="hidden" name="user_id" value="{{  auth()->guard('user')->user()->id }}  ">
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
                                                <span class="main-price"> ৳{{ $product->regular_price }}</span>
                                            @else
                                                <span class="main-price discounted">৳{{ $product->regular_price }}</span>
                                                <span class="discounted-price"> ৳{{ $product->discount_price }}</span>
                                            @endif

                                        </p>
                                    </div>

                                    <?php
                                    $review = \App\Review::where('pid', $product->id)->get();
                                    $review_count = \App\Review::where('pid', $product->id)->count();
                                    $review_sum = \App\Review::where('pid', $product->id)->sum('rating');
                                    ?>


                                    @foreach($review as $rating)

                                        <div class="rating">
                                            @for($i=1; $i<=$rating->rating; $i++)
                                                <i class="lnr lnr-star active"></i>
                                            @endfor
                                            @if($rating->rating != round($rating->rating))
                                                <i class="lnr lnr-star"></i>
                                            @endif
                                            <span>({{ $rating->rating }})</span>
                                        </div>
                                    @endforeach


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
                                                <span class="main-price"> ৳{{ $product->regular_price }}</span>
                                            @else
                                                <span class="main-price discounted">৳{{ $product->regular_price }}</span>
                                                <span class="discounted-price"> ৳{{ $product->discount_price }}</span>
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
                                            {{--                                            <a class="hover-icon" href="#" data-toggle = "modal" data-target="#quick-view-modal-container{{ $product->id }}"><i class="lnr lnr-eye"></i></a>--}}

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
                {{ $products->appends(request()->query())->links() }}


                     @endif
                <!--=======  End of shop product wrap    =======-->


                </div>
            </div>
        </div>
    </div>

    <!--=====  End of shop page content  ======-->

    <div id="dynamic-content"></div>




    <!--=============================================
=            Footer         =
=============================================-->




@endsection()
