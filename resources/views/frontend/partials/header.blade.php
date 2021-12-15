<!--=============================================
=            Header One         =
=============================================-->

<div class="header-container header-sticky">

    <!--=======  header top  =======-->

    <div class="header-top pt-15 pb-15">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 text-center text-md-left mb-sm-15">
                    <span class="header-top-text">Welcome to  Online Shopping Store !</span>
                </div>
                <div class="col-12 col-md-6">

                    <!--=======  header top dropdowns  =======-->

                    <div class="header-top-dropdown d-flex justify-content-center justify-content-md-end">

                        <!--=======  single dropdown  =======-->


                        <div class="single-dropdown">
                            @auth('user')



                                <a href="#" id="changeAccount"><span id="accountMenuName">{{ Auth::guard('user')->user()->first_name  }} <i
                                            class="fa fa-angle-down"></i></span></a>
                                <div class="language-currency-list hidden" id="accountList">
                                    <ul>
                                        <li><a href="{{ route('frontend.my-account') }}">My Account</a></li>
                                        <li><a href="{{ route('frontend.checkout.index') }}">Checkout</a></li>
                                        <li><a href="{{ route('frontend.logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                Logout</a></li>
                                        <form id="logout-form" action="{{ route('frontend.logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </ul>
                                </div>
                            @else
                                <a href="#" id="changeAccount"><span id="accountMenuName">Login <i
                                            class="fa fa-angle-down"></i></span></a>
                                <div class="language-currency-list hidden" id="accountList">
                                    <ul>
                                        <li><a href="{{ route('frontend.login') }}">Login</a></li>
                                        <li><a href="{{ route('frontend.register') }}">Registration</a></li>


                                    </ul>
                                </div>

                            @endauth


                        </div>
                        <span class="separator pl-15 pr-15">|</span>

                        <!--=======  End of single dropdown  =======-->

                        <!--=======  single dropdown  =======-->

                        <a href="#" id="changeCurrency"><span id="currencyName">BDT ৳ </span></a>


                    {{--                        <span class="separator pl-15 pr-15">|</span>--}}

                    <!--=======  End of single dropdown  =======-->

                        <!--=======  single dropdown  =======-->

                    {{--                        <div class="single-dropdown">--}}
                    {{--                            <img src="{{ asset('frontend/assets/images/flags/1.jpg') }} " alt="">--}}
                    {{--                            <a href="#" id="changeLanguage"><span id="languageName">English <i class="fa fa-angle-down"></i></span></a>--}}
                    {{--                            <div class="language-currency-list hidden" id="languageList">--}}
                    {{--                                <ul>--}}
                    {{--                                    <li><a href="#"><img src="{{ asset('frontend/assets/images/flags/1.jpg') }} " alt=""> English</a></li>--}}
                    {{--                                    <li><a href="#"><img src="{{ asset('frontend/assets/images/flags/2.jpg') }} " alt=""> Français</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}

                    <!--=======  End of single dropdown  =======-->


                    </div>


                    <!--=======  End of header top dropdowns  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=======  End of header top  =======-->

    <!--=======  Menu Top  =======-->

    <div class="menu-top pt-15 pb-15 pt-sm-20 pb-sm-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-3 col-md-3 text-center text-md-left mb-sm-20">
                    <!--=======  logo  =======-->

                    <div class="logo">
                        <a href="{{ route('frontend.index') }}">
                            <img src="{{ asset('frontend/assets/images/doozo/doozo-logo.svg') }}" class="img-fluid"
                                 alt="">
                        </a>
                    </div>

                    <!--=======  End of logo  =======-->
                </div>
                <div class="col-12 col-lg-6 col-md-5 mb-sm-20">
                    <!--=======  Search bar  =======-->
                    <form action="{{ route('frontend.search') }}" method="get">

                        <div class="search-bar">
                            <input type="search" placeholder="Search entire store here ..." name="query" id="search"
                                   value="{{ request()->input('query') }}"
                            >
                            <button><i class="lnr lnr-magnifier"></i></button>
                        </div>
                    </form>

                    <!--=======  End of Search bar  =======-->
                </div>
                <div class="col-12 col-lg-3 col-md-4">
                    <!--=======  menu top icons  =======-->

                    <div class="menu-top-icons d-flex justify-content-center align-items-center justify-content-md-end">
                        <!--=======  single icon  =======-->

                        <div class="single-icon mr-20">
                            <a href="{{route('frontend.wishlist.index')}}">
                                <i class="lnr lnr-heart"></i>
                                <span class="text">Wishlist</span>
                                <span class="count">{{Cart::instance('wishlist')->count()}}</span>
                            </a>
                        </div>

                        <!--=======  End of single icon  =======-->

                        <!--=======  single icon  =======-->

                        <div class="single-icon">
                            <a href="javascript:void(0)" id="cart-icon">
                                <i class="lnr lnr-cart"></i>
                                <span class="text">My Cart</span>
                                <span class="count">{{Cart::instance('default')->count()}}</span>
                            </a>
                            <!-- cart floating box -->
                            <div class="cart-floating-box hidden" id="cart-floating-box">
                                <div class="cart-items">
                                    @foreach(Cart::content() as $item)
                                        <div class="cart-float-single-item d-flex">
                                            <span class="remove-item" id="remove-item"><a
                                                    href="{{route('frontend.cart.destroy', $item->rowId)}}"><i
                                                        class="fa fa-times"></i></a></span>
                                            <div class="cart-float-single-item-image">
                                                <a href="{{ route('frontend.shop.show',$item->model->slug) }}"><img
                                                        src="{{ asset('uploads/'.$item->model->product_image)  }} "
                                                        class="img-fluid" alt=""></a>
                                            </div>
                                            <div class="cart-float-single-item-desc">
                                                <p class="product-title"><a
                                                        href="{{ route('frontend.shop.show',$item->model->slug) }}">{{$item->model->name}} </a>
                                                </p>
                                                <p class="price"><span class="quantity">{{$item->qty}} x</span>৳
                                                    @if( $item->model->discount_price == 0 )
                                                        {{ $item->model->regular_price }}
                                                    @else

                                                        {{ $item->model->discount_price }}
                                                    @endif


                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="cart-calculation">
                                    <div class="calculation-details">
                                        <p class="total">Subtotal <span>৳ {{Cart::subtotal()}}</span></p>
                                    </div>
                                    <div class="floating-cart-btn text-center">
                                        @if(Cart::instance('default')->count() == 0 )
                                            <p class="total">No item in cart</p>
                                        @else
                                            <a class="floating-cart-btn" href="{{route('frontend.cart.index')}}">View
                                                Cart</a>

                                            <a class="floating-cart-btn" href="{{route('frontend.checkout.index')}}">Checkout</a>

                                        @endif


                                    </div>
                                </div>
                            </div>
                            <!-- end of cart floating box -->
                        </div>

                        <!--=======  End of single icon  =======-->
                    </div>

                    <!--=======  End of menu top icons  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=======  End of Menu Top  =======-->

    <!--=======  navigation menu  =======-->

    <div class="navigation-menu">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <!--=======  category menu  =======-->

                    <div class="hero-side-category">
                        <!-- Category Toggle Wrap -->
                        <div class="category-toggle-wrap">
                            <!-- Category Toggle -->
                            <button class="category-toggle"><span class="lnr lnr-text-align-left"></span> Browse
                                Categories <span class="lnr lnr-chevron-down"></span></button>
                        </div>

                        <!-- Category Menu -->
                        <nav class="category-menu">
                            <ul>
                                {{--                                <li class="menu-item-has-children"><a> Bedroom</a>--}}

                                {{--                                    <!-- Mega Category Menu Start -->--}}
                                {{--                                    <ul class="category-mega-menu">--}}
                                {{--                                        <li class="menu-item-has-children">--}}
                                {{--                                            <a class="megamenu-head" > Bedroom </a>--}}
                                {{--                                            <ul>--}}
                                {{--                                                <li><a href="/shop?category=bedroom-sets">Bedroom Sets </a></li>--}}
                                {{--                                                <li><a href="/shop?category=youth-bedroom">Youth Bedroom </a></li>--}}
                                {{--                                                <li><a href="/shop?category=master-bedroom">Master Bedroom </a></li>--}}
                                {{--                                                <li><a href="/shop?category=beds-and-headboards">Beds & Headboards</a></li>--}}
                                {{--                                                <li><a href="/shop?category=bunk-bed">Bunk Bed</a></li>--}}
                                {{--                                                <li><a href="/shop?category=nightstand">Nightstand</a></li>--}}
                                {{--                                                <li><a href="/shop?category=day-beds-and-trundies">Day Beds & Trundies</a></li>--}}
                                {{--                                                <li><a href="/shop?category=mattress-and-pillows">Mattress & Pillows</a></li>--}}
                                {{--                                                <li><a href="/shop?category=bed-rails">Bed Rails</a></li>--}}
                                {{--                                                <li><a href="/shop?category=wardrobe">Wardrobe</a></li>--}}
                                {{--                                            </ul>--}}
                                {{--                                        </li>--}}


                                {{--                                    </ul><!-- Mega Category Menu End -->--}}

                                {{--                                </li>--}}
                                {{--                                <li class="menu-item-has-children"><a >Dining Room</a>--}}

                                {{--                                    <!-- Mega Category Menu Start -->--}}
                                {{--                                    <ul class="category-mega-menu">--}}
                                {{--                                        <li class="menu-item-has-children">--}}
                                {{--                                            <a class="megamenu-head" >Dining Room</a>--}}
                                {{--                                            <ul>--}}
                                {{--                                                <li><a href="/shop?category=formal-dining">Formal Dining</a></li>--}}
                                {{--                                                <li><a href="/shop?category=casual-dining">Casual Dining</a></li>--}}
                                {{--                                                <li><a href="/shop?category=dining-barstool">Barstool</a></li>--}}
                                {{--                                                <li><a href="/shop?category=pub-and-counter-height-tables">Pub and Counter Height Tables</a></li>--}}

                                {{--                                            </ul>--}}
                                {{--                                        </li>--}}


                                {{--                                    </ul><!-- Mega Category Menu End -->--}}

                                {{--                                </li>--}}
                                {{--                                <li class="menu-item-has-children"><a >Family Room</a>--}}

                                {{--                                    <!-- Mega Category Menu Start -->--}}
                                {{--                                    <ul class="category-mega-menu">--}}

                                {{--                                        <li class="menu-item-has-children">--}}
                                {{--                                            <a class="megamenu-head" >Family Room</a>--}}
                                {{--                                            <ul>--}}
                                {{--                                                <li><a href="/shop?category=family-sofas">Sofas</a></li>--}}
                                {{--                                                <li><a href="/shop?category=sectional">Sectional</a></li>--}}
                                {{--                                                <li><a href="/shop?category=sofa-sleeper">Sofa Sleeper</a></li>--}}
                                {{--                                                <li><a href="/shop?category=futons-and-adjustable-sofa">Futons & Adjustable Sofa</a></li>--}}
                                {{--                                                <li><a href="/shop?category=media-and-tv-storage">Media & TV Storage</a></li>--}}
                                {{--                                                <li><a href="/shop?category=occasional-table">Occasional Table</a></li>--}}
                                {{--                                                <li><a href="/shop?category=benches-and-ottomans">Benches & Ottomans</a></li>--}}
                                {{--                                                <li><a href="/shop?category=youth-furniture">Youth Furniture</a></li>--}}
                                {{--                                                <li><a href="/shop?category=special-bays">Special Bays</a></li>--}}
                                {{--                                            </ul>--}}
                                {{--                                        </li>--}}

                                {{--                                    </ul><!-- Mega Category Menu End -->--}}

                                {{--                                </li>--}}
                                {{--                                <li class="menu-item-has-children"><a >Living Room</a>--}}

                                {{--                                    <!-- Mega Category Menu Start -->--}}
                                {{--                                    <ul class="category-mega-menu">--}}

                                {{--                                        <li class="menu-item-has-children">--}}
                                {{--                                            <a class="megamenu-head" >Living Room</a>--}}
                                {{--                                            <ul>--}}
                                {{--                                                <li><a href="/shop?category=sofas">Sofas</a></li>--}}
                                {{--                                                <li><a href="/shop?category=chairs">Chairs</a></li>--}}
                                {{--                                                <li><a href="/shop?category=recliners">Recliners</a></li>--}}
                                {{--                                                <li><a href="/shop?category=occasional-tables">Occasional Tables</a></li>--}}
                                {{--                                                <li><a href="/shop?category=entertainment">Entertainment</a></li>--}}
                                {{--                                            </ul>--}}
                                {{--                                        </li>--}}

                                {{--                                    </ul><!-- Mega Category Menu End -->--}}

                                {{--                                </li>--}}
                                {{--                                <li class="menu-item-has-children"><a > Accents</a>--}}

                                {{--                                    <!-- Mega Category Menu Start -->--}}
                                {{--                                    <ul class="category-mega-menu">--}}

                                {{--                                        <li class="menu-item-has-children">--}}
                                {{--                                            <a class="megamenu-head"  >Accents</a>--}}
                                {{--                                            <ul>--}}
                                {{--                                                <li><a href="/shop?category=accents-mirror">Mirrors</a></li>--}}
                                {{--                                                <li><a href="/shop?category=wall-art">Wall Art</a></li>--}}
                                {{--                                            </ul>--}}
                                {{--                                        </li>--}}

                                {{--                                    </ul><!-- Mega Category Menu End -->--}}

                                {{--                                </li>--}}
                                {{--                                <li class="menu-item-has-children"><a > Accessories </a>--}}

                                {{--                                    <!-- Mega Category Menu Start -->--}}
                                {{--                                    <ul class="category-mega-menu">--}}

                                {{--                                        <li class="menu-item-has-children">--}}
                                {{--                                            <a class="megamenu-head"  >Accessories </a>--}}
                                {{--                                            <ul>--}}
                                {{--                                                <li><a href="/shop?category=accent-chair">Accent Chair</a></li>--}}
                                {{--                                                <li><a href="/shop?category=mirrors">Mirrors</a></li>--}}
                                {{--                                                <li><a href="/shop?category=clocks">Clocks</a></li>--}}
                                {{--                                                <li><a href="/shop?category=curio">Curio</a></li>--}}
                                {{--                                                <li><a href="/shop?category=console-table">Console Table</a></li>--}}
                                {{--                                                <li><a href="/shop?category=vanity">Vanity</a></li>--}}
                                {{--                                                <li><a href="/shop?category=jewelry-armoire">Jewelry Armoire</a></li>--}}
                                {{--                                                <li><a href="/shop?category=sink-cabinets">Sink Cabinets</a></li>--}}
                                {{--                                                <li><a href="/shop?category=lighting">Lighting</a></li>--}}
                                {{--                                                <li><a href="/shop?category=screens">Screens</a></li>--}}
                                {{--                                                <li><a href="/shop?category=coat-rack">Coat Rack</a></li>--}}
                                {{--                                            </ul>--}}
                                {{--                                        </li>--}}

                                {{--                                    </ul><!-- Mega Category Menu End -->--}}

                                {{--                                </li>--}}
                                {{--                                <li class="menu-item-has-children"><a> Home Office</a>--}}

                                {{--                                    <!-- Mega Category Menu Start -->--}}
                                {{--                                    <ul class="category-mega-menu">--}}

                                {{--                                        <li class="menu-item-has-children">--}}
                                {{--                                            <a class="megamenu-head"  >Home Office</a>--}}
                                {{--                                            <ul>--}}
                                {{--                                                <li><a href="/shop?category=desk-and-chairs">Desk & Chairs</a></li>--}}
                                {{--                                                <li><a href="/shop?category=shelf-and-rack">Shelf & Rack</a></li>--}}
                                {{--                                            </ul>--}}
                                {{--                                        </li>--}}

                                {{--                                    </ul><!-- Mega Category Menu End -->--}}

                                {{--                                </li>--}}
                                {{--                                <li class="menu-item-has-children"><a> Simon Bedding</a>--}}

                                {{--                                    <!-- Mega Category Menu Start -->--}}
                                {{--                                    <ul class="category-mega-menu">--}}

                                {{--                                        <li class="menu-item-has-children">--}}
                                {{--                                            <a class="megamenu-head"  >Simon Bedding</a>--}}
                                {{--                                            <ul>--}}
                                {{--                                                <li><a href="/shop?category=bed-frames">Bed Frames</a></li>--}}
                                {{--                                                <li><a href="/shop?category=foundations">Foundations</a></li>--}}
                                {{--                                                <li><a href="/shop?category=mattresses">Mattresses</a></li>--}}
                                {{--                                            </ul>--}}
                                {{--                                        </li>--}}

                                {{--                                    </ul><!-- Mega Category Menu End -->--}}

                                {{--                                </li>--}}
                                @foreach(\App\Category::orderBy('name', 'Asc')->get() as $cat)
                                    <li class="menu-item"><a href="/shop?category={{$cat->slug}}">{{$cat->name}}</a>
                                    </li>
                                @endforeach

                                {{--                                <li><a href="#" id="more-btn"><span class="lnr lnr-plus-circle"></span> More Categories</a></li>--}}
                            </ul>
                        </nav>
                    </div>

                    <!--=======  End of category menu =======-->
                </div>
                <div class="col-12 col-lg-9">
                    <!-- navigation section -->
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li class=""><a href="{{route('frontend.index')}}">HOME</a>

                                </li>
                                <li class=""><a href="{{route('frontend.shop.index')}}">Shop</a>

                                {{--</li>--}}


                                {{--<li ><a href="{{route('blog.show')}}">BLOG</a>--}}

                                {{--</li>--}}
                                <li><a href="{{route('frontend.about.index')}}">ABOUT</a></li>
                                <li><a href="{{route('frontend.contact.index')}}">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- end of navigation section -->
                </div>
                <div class="col-12 d-block d-lg-none">
                    <!-- Mobile Menu -->
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>

    <!--=======  End of navigation menu  =======-->
</div>

<!--=====  End of Header One  ======-->
