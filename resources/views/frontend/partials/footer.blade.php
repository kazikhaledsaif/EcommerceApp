<div class="floating-cart menu-top-icons d-flex justify-content-center align-items-center justify-content-md-end">
    <!--=======  single icon  =======-->

    <div class="single-icon mr-20">
        <a href="{{route('frontend.wishlist.index')}}">
            <i class="lnr lnr-heart"></i>
            <span class="text d-block text-white">Wishlist</span>
            <span class="count">{{Cart::instance('wishlist')->count()}}</span>
        </a>
    </div>

    <!--=======  End of single icon  =======-->

    <!--=======  single icon  =======-->

    <div class="single-icon mr-20">
        <a href="{{route('frontend.cart.index')}}" >
            <i class="lnr lnr-cart"></i>
            <span class="text d-block text-white">My Cart</span>
            <span class="count">{{Cart::instance('default')->count()}}</span>
        </a>

    </div>
    <div class="single-icon  mr-20">
        <a href="{{route('frontend.checkout.index')}}" >
            <i class="lnr lnr-store"></i>
            <span class="text d-block text-white">Checkout</span>
        </a>

    </div>
    <div class="single-icon">
        <a href="{{ route('frontend.my-account') }}" >
            <i class="lnr lnr-home"></i>
            <span class="text d-block text-white">My Account</span>
        </a>

    </div>

    <!--=======  End of single icon  =======-->
</div>

<div class="footer-container pt-60 pb-100">
    <!--=======  footer navigation container  =======-->

    <div class="footer-navigation-container mb-60">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-6 col-sm-6 mb-20 mb-lg-0 mb-xl-0 mb-md-35 mb-sm-35">
                    <!--=======  single footer  =======-->

                    <div class="single-footer">
                        <!--=======  Single block  =======-->

                        <div class="single-block mb-25">
                            <h3 class="footer-title">Need Help?</h3>
                            <p> <a href="tel:09638573540" >Call: +09638573540</a></p>
                        </div>

                        <!--=======  End of Single block  =======-->

                        <!--=======  Single block  =======-->

                        <div class="single-block">
                            <h3 class="footer-title">Check Order Status</h3>
                            <p> <a href="{{route('frontend.order-check')}}">Click here to check Order Status.</a></p>
                        </div>

                        <!--=======  End of Single block  =======-->
                    </div>

                    <!--=======  End of single footer  =======-->

                </div>

                <div class="col-12 col-lg-2 col-md-6 col-sm-6 mb-20 mb-lg-0 mb-xl-0 mb-md-35 mb-sm-35">
                    <!--=======  single footer  =======-->

                    <div class="single-footer">
                        <h3 class="footer-title mb-20">Products</h3>
                        <ul>

                            <li><a href="{{route('frontend.my-account')}}">My Account</a></li>
                            <li><a href="{{route('frontend.order-check')}}">Order Tracking</a></li>
                        </ul>
                    </div>

                    <!--=======  End of single footer  =======-->
                </div>

                <div class="col-12 col-lg-2 col-md-6 col-sm-6 mb-20 mb-xs-35 mb-lg-0 mb-xl-0">
                    <!--=======  single footer  =======-->

                    <div class="single-footer">
                        <h3 class="footer-title mb-20">Our Company</h3>
                        <ul>
                            <li><a href="{{route('frontend.about.index')}}">About Us</a></li>
                            <li><a href="{{route('frontend.contact.index')}}">Contact Us</a></li>
                        </ul>
                    </div>

                    <!--=======  End of single footer  =======-->
                </div>

                <div class="col-12 col-lg-4 col-md-6 col-sm-6">
                    <!--=======  single footer  =======-->

{{--                    <div class="single-footer mb-35">--}}
{{--                        <h3 class="footer-title mb-20">Newsletter</h3>--}}

{{--                        <div class="newsletter-form mb-20">--}}
{{--                            <form  class="mc-form subscribe-form" action="{{ route('frontend.newsletter.add') }}">--}}
{{--                                <input type="email" name="email" placeholder="Your email address">--}}
{{--                                <button type="submit" value="submit"><i class="lnr lnr-envelope"></i></button>--}}
{{--                            </form>--}}
{{--                        </div>--}}

{{--                    </div>--}}

                    <!--=======  End of single footer  =======-->

                    <!--=======  single footer  =======-->

{{--                    <div class="single-footer">--}}
{{--                        <h3 class="footer-title mb-10">Support Center</h3>--}}
{{--                        <p>M.R. View 275/3 (Ground Floor) Khilgaon Tilpapara, Dhaka-1219</p>--}}
{{--                    </div>--}}

                    <!--=======  End of single footer  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=======  End of footer navigation container  =======-->
    <!--=======  footer social link container  =======-->

    <div class="footer-social-link-container pt-15 pb-15 mb-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 col-md-7 mb-sm-15 text-left text-sm-center text-lg-left">
                    <!--=======  app download area  =======-->

{{--                    <div class="app-download-area">--}}
{{--                        <span class="title">Free App (Coming Soon):</span>--}}
{{--                        <a target="_blank" href="#" class="app-download-btn apple-store"><i class="fa fa-apple"></i> Apple Store</a>--}}
{{--                        <a  href="#" class="app-download-btn google-play"><i class="fa fa-android"></i> Google play</a>--}}
{{--                    </div>--}}

                    <!--=======  End of app download area  =======-->
                </div>
                <div class="col-12 col-lg-6 col-md-5 text-left text-sm-center text-md-right">
                    <div class="social-link">
                        <span class="title">Follow Us:</span>
                        <ul>
                            <li><a target="_blank" href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=======  End of footer social link container  =======-->

    <!--=======  footer bottom navigation  =======-->

{{--    <div class="footer-bottom-navigation text-center mb-20">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <!--=======  navigation-container  =======-->--}}

{{--                    <div class="navigation-container">--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">About Us</a> <span class="separator">|</span></li>--}}
{{--                            <li><a href="#">Blog</a> <span class="separator">|</span></li>--}}
{{--                            <li><a href="#">My Account</a> <span class="separator">-</span></li>--}}
{{--                            <li><a href="#">Order Status</a> <span class="separator">-</span></li>--}}
{{--                            <li><a href="#">Shipping &amp; Returns</a> <span class="separator">-</span></li>--}}
{{--                            <li><a href="#">Privacy Policy</a> <span class="separator">-</span></li>--}}
{{--                            <li><a href="#">Terms &amp; Conditions</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}

{{--                    <!--=======  End of navigation-container  =======-->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!--=======  End of footer bottom navigation  =======-->

    <!--=======  copyright section  =======-->

    <div class="copyright-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  Copyright text  =======-->

                    <p class="copyright-text">Copyright &copy;<?php echo date("Y"); ?> <strong style="color: #04FDA1"> <a href="#"> {{ config('app.name', 'Laravel') }}</a></strong>. All Rights Reserved
{{--                        <span> Developed by </span>--}}
{{--                        <a href="http://virtualechos.com/" style="color: #04FDA1  ">Virtual Echos</a>--}}
                    </p>

                    <!--=======  End of Copyright text  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=======  End of copyright section  =======-->
</div>


