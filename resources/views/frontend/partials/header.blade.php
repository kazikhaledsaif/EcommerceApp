<div class="header-container header-sticky">

    <!--=======  header top  =======-->

    <div class="header-top pt-15 pb-15">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 text-center text-md-left mb-sm-15">
                    <span class="header-top-text">Welcome to Pataku Online Shopping Store !</span>
                </div>
                <div class="col-12 col-md-6">

                    <!--=======  header top dropdowns  =======-->

                    <div class="header-top-dropdown d-flex justify-content-center justify-content-md-end">

                        <!--=======  single dropdown  =======-->

{{--

                        <div class="single-dropdown">
                            <a href="#" id="changeAccount"><span id="accountMenuName">My Account <i class="fa fa-angle-down"></i></span></a>
                            <div class="language-currency-list hidden" id="accountList">
                                <ul>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="login-register.html">Login</a></li>
                                </ul>
                            </div>
                        </div>
--}}

                        <div class="single-dropdown">
                            @guest
                                <a href="#" id="changeAccount"><span id="accountMenuName">Login <i class="fa fa-angle-down"></i></span></a>
                                <div class="language-currency-list hidden" id="accountList">
                                    <ul>
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Registration</a></li>


                                    </ul>
                                </div>

                            @else
                                <a href="#" id="changeAccount"><span id="accountMenuName">{{ Auth::user()->name }} <i class="fa fa-angle-down"></i></span></a>
                                <div class="language-currency-list hidden" id="accountList">
                                    <ul>
                                        <li><a href="">My Account</a></li>
                                        <li><a href="">Checkout</a></li>
                                        <li><a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                Logout</a></li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </ul>
                                </div>
                            @endguest


                        </div>
                        <span class="separator pl-15 pr-15">|</span>

                        <!--=======  End of single dropdown  =======-->

                        <!--=======  single dropdown  =======-->


                        <div class="single-dropdown">
                            <a href="#" id="changeCurrency"><span id="currencyName">USD $ <i class="fa fa-angle-down"></i></span></a>
                            <div class="language-currency-list hidden" id="currencyList">
                                <ul>
                                    <li><a href="#">USD $</a></li>
                                    <li><a href="#">EURO €</a></li>
                                </ul>
                            </div>
                        </div>

                        <span class="separator pl-15 pr-15">|</span>

                        <!--=======  End of single dropdown  =======-->

                        <!--=======  single dropdown  =======-->

                        <div class="single-dropdown">
                            <img src="{{ asset('frontend/assets/images/flags/1.jpg') }} " alt="">
                            <a href="#" id="changeLanguage"><span id="languageName">English <i class="fa fa-angle-down"></i></span></a>
                            <div class="language-currency-list hidden" id="languageList">
                                <ul>
                                    <li><a href="#"><img src="{{ asset('frontend/assets/images/flags/1.jpg') }} " alt=""> English</a></li>
                                    <li><a href="#"><img src="{{ asset('frontend/assets/images/flags/2.jpg') }} " alt=""> Français</a></li>
                                </ul>
                            </div>
                        </div>

                        <!--=======  End of single dropdown  =======-->


                    </div>


                    <!--=======  End of header top dropdowns  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=======  End of header top  =======-->

    <!--=======  Menu Top  =======-->

    <div class="menu-top pt-35 pb-35 pt-sm-20 pb-sm-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-3 col-md-3 text-center text-md-left mb-sm-20">
                    <!--=======  logo  =======-->

                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ asset('frontend/assets/images/logo.png') }} " class="img-fluid" alt="">
                        </a>
                    </div>

                    <!--=======  End of logo  =======-->
                </div>
                <div class="col-12 col-lg-6 col-md-5 mb-sm-20">
                    <!--=======  Search bar  =======-->
                    <form action="index.html">
                        <div class="search-bar">
                            <input type="search" placeholder="Search entire store here ...">
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
                            <a href="wishlist.html">
                                <i class="lnr lnr-heart"></i>
                                <span class="text">Wishlist</span>
                                <span class="count">0</span>
                            </a>
                        </div>

                        <!--=======  End of single icon  =======-->

                        <!--=======  single icon  =======-->

                        <div class="single-icon">
                            <a href="javascript:void(0)" id="cart-icon">
                                <i class="lnr lnr-cart"></i>
                                <span class="text">My Cart</span>
                                <span class="count">0</span>
                            </a>
                            <!-- cart floating box -->
                            <div class="cart-floating-box hidden" id="cart-floating-box">
                                <div class="cart-items">
                                    <div class="cart-float-single-item d-flex">
                                        <span class="remove-item" id="remove-item"><a href="#"><i class="fa fa-times"></i></a></span>
                                        <div class="cart-float-single-item-image">
                                            <a href="single-product.html"><img src="{{ asset('frontend/assets/images/products/product01.jpg') }} " class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="cart-float-single-item-desc">
                                            <p class="product-title"> <a href="single-product.html">Duis pulvinar obortis eleifend </a></p>
                                            <p class="price"><span class="quantity">1 x</span> $20.50</p>
                                        </div>
                                    </div>
                                    <div class="cart-float-single-item d-flex">
                                        <span class="remove-item"><a href="#"><i class="fa fa-times"></i></a></span>
                                        <div class="cart-float-single-item-image">
                                            <a href="single-product.html"><img src="{{ asset('frontend/assets/images/products/product02.jpg') }} " class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="cart-float-single-item-desc">
                                            <p class="product-title"> <a href="single-product.html">Fusce ultricies dolor vitae</a></p>
                                            <p class="price"><span class="quantity">1 x</span> $20.50</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-calculation">
                                    <div class="calculation-details">
                                        <p class="total">Subtotal <span>$22</span></p>
                                    </div>
                                    <div class="floating-cart-btn text-center">
                                        <a class="floating-cart-btn" href="checkout.html">Checkout</a>
                                        <a class="floating-cart-btn" href="cart.html">View Cart</a>
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
                            <button class="category-toggle"> <span class="lnr lnr-text-align-left"></span> Browse Categories <span class="lnr lnr-chevron-down"></span></button>
                        </div>

                        <!-- Category Menu -->
                        <nav class="category-menu">
                            <ul>
                                <li><a href="shop-left-sidebar.html">Sofas &amp; Chairs</a></li>
                                <li class="menu-item-has-children"><a href="shop-left-sidebar.html">Drawing Room</a>

                                    <!-- Mega Category Menu Start -->
                                    <ul class="category-mega-menu">
                                        <li class="menu-item-has-children">
                                            <a class="megamenu-head" href="shop-left-sidebar.html">Living Chairs</a>
                                            <ul>
                                                <li><a href="shop-left-sidebar.html">Sofas</a></li>
                                                <li><a href="shop-left-sidebar.html">Armchairs</a></li>
                                                <li><a href="shop-left-sidebar.html">Dining Chairs &amp; Benches</a></li>
                                                <li><a href="shop-left-sidebar.html">Desk Chairs</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a class="megamenu-head" href="shop-left-sidebar.html">Sofa</a>
                                            <ul>
                                                <li><a href="shop-left-sidebar.html">Dining Tables</a></li>
                                                <li><a href="shop-left-sidebar.html">Dining Chairs</a></li>
                                                <li><a href="shop-left-sidebar.html">Side Boards</a></li>
                                                <li><a href="shop-left-sidebar.html">Coffee Tables</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a class="megamenu-head" href="shop-left-sidebar.html">Storage</a>
                                            <ul>
                                                <li><a href="shop-left-sidebar.html">Chair &amp; Sofas</a></li>
                                                <li><a href="shop-left-sidebar.html">Tables</a></li>
                                                <li><a href="shop-left-sidebar.html">Sets</a></li>
                                                <li><a href="shop-left-sidebar.html">Loungers</a></li>
                                            </ul>
                                        </li>
                                    </ul><!-- Mega Category Menu End -->

                                </li>
                                <li class="menu-item-has-children"><a href="shop-left-sidebar.html">Dinning Room</a>

                                    <!-- Mega Category Menu Start -->
                                    <ul class="category-mega-menu">
                                        <li class="menu-item-has-children">
                                            <a class="megamenu-head" href="shop-left-sidebar.html">Living Chairs</a>
                                            <ul>
                                                <li><a href="shop-left-sidebar.html">Sofas</a></li>
                                                <li><a href="shop-left-sidebar.html">Armchairs</a></li>
                                                <li><a href="shop-left-sidebar.html">Dining Chairs &amp; Benches</a></li>
                                                <li><a href="shop-left-sidebar.html">Desk Chairs</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a class="megamenu-head" href="shop-left-sidebar.html">Sofa</a>
                                            <ul>
                                                <li><a href="shop-left-sidebar.html">Dining Tables</a></li>
                                                <li><a href="shop-left-sidebar.html">Dining Chairs</a></li>
                                                <li><a href="shop-left-sidebar.html">Side Boards</a></li>
                                                <li><a href="shop-left-sidebar.html">Coffee Tables</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a class="megamenu-head" href="shop-left-sidebar.html">Storage</a>
                                            <ul>
                                                <li><a href="shop-left-sidebar.html">Chair &amp; Sofas</a></li>
                                                <li><a href="shop-left-sidebar.html">Tables</a></li>
                                                <li><a href="shop-left-sidebar.html">Sets</a></li>
                                                <li><a href="shop-left-sidebar.html">Loungers</a></li>
                                            </ul>
                                        </li>
                                    </ul><!-- Mega Category Menu End -->

                                </li>
                                <li><a href="shop-left-sidebar.html">Out Door Room</a></li>
                                <li><a href="shop-left-sidebar.html">Room living</a></li>
                                <li><a href="shop-left-sidebar.html">Estilo</a></li>
                                <li><a href="shop-left-sidebar.html">Living Chairs</a></li>
                                <li class="hidden"><a href="shop-left-sidebar.html">New Sofas</a></li>
                                <li class="hidden"><a href="shop-left-sidebar.html">Sleight Sofas</a></li>
                                <li><a href="#" id="more-btn"><span class="lnr lnr-plus-circle"></span> More Categories</a></li>
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
                                <li class="active menu-item-has-children"><a href="#">HOME</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home Shop 1</a></li>
                                        <li><a href="index-2.html">Home Shop 2</a></li>
                                        <li><a href="index-3.html">Home Shop 3</a></li>
                                        <li><a href="index-4.html">Home Shop 4</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="shop-left-sidebar.html">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children"><a href="shop-4-column.html">shop grid</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop-3-column.html">shop 3 column</a></li>
                                                <li><a href="shop-4-column.html">shop 4 column</a></li>
                                                <li><a href="shop-left-sidebar.html">shop left sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">shop right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="shop-list.html">shop List</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop-list.html">shop List</a></li>
                                                <li><a href="shop-list-left-sidebar.html">shop List Left Sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.html">shop List Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="single-product.html">Single Product</a>
                                            <ul class="sub-menu">
                                                <li><a href="single-product.html">Single Product</a></li>
                                                <li><a href="single-product-variable.html">Single Product variable</a></li>
                                                <li><a href="single-product-affiliate.html">Single Product affiliate</a></li>
                                                <li><a href="single-product-group.html">Single Product group</a></li>
                                                <li><a href="single-product-tabstyle-2.html">Tab Style 2</a></li>
                                                <li><a href="single-product-tabstyle-3.html">Tab Style 3</a></li>
                                                <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                                                <li><a href="single-product-gallery-right.html">Gallery Right</a></li>
                                                <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                                <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                                                <li><a href="single-product-slider-box.html">Slider Box</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menu-item-has-children"><a href="#">PAGES</a>
                                    <ul class="mega-menu three-column">
                                        <li><a href="#">Column One</a>
                                            <ul>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="#">Column Two</a>
                                            <ul>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="login-register.html">Login Register</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Column Three</a>
                                            <ul>
                                                <li><a href="compare.html">Compare</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">BLOG</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-3-column.html">Blog 3 column</a></li>
                                        <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                        <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                        <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                        <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                        <li><a href="blog-post-left-sidebar.html">Blog Post Left Sidebar</a></li>
                                        <li><a href="blog-post-right-sidebar.html">Blog Post Right Sidebar</a></li>
                                        <li><a href="blog-post-image-format.html">Blog Post Image Format</a></li>
                                        <li><a href="blog-post-image-gallery.html">Blog Post Image Gallery Format</a></li>
                                        <li><a href="blog-post-audio-format.html">Blog Post Audio Format</a></li>
                                        <li><a href="blog-post-video-format.html">Blog Post Video Format</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">CONTACT</a></li>
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