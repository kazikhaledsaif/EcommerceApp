<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') - Ecommerce </title>
    <meta name="description" content="@yield('meta-description')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('frontend/assets/images/favicon.ico') }}">

    <!-- CSS
    ============================================ -->
    <!-- Bootstrap CSS -->
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }} " rel="stylesheet">

    <!-- FontAwesome CSS -->
    <link href="{{ asset('frontend/assets/css/font-awesome.min.css') }} " rel="stylesheet">

    <!-- Linear Icon CSS -->
    <link href="{{ asset('frontend/assets/css/linear-icon.css') }}" rel="stylesheet">

    <!-- Plugins CSS -->
    <link href="{{ asset('frontend/assets/css/plugins.css') }}" rel="stylesheet">

    <!-- Helper CSS -->
    <link href="{{ asset('frontend/assets/css/helper.css') }}" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{ asset('frontend/assets/css/main.css') }}" rel="stylesheet">

    @stack('css')
    <!-- Modernizer JS -->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <style>
        /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
        .StripeElement {
            background-color: white;
            height: 40px;
            padding: 10px 12px;
            border-radius: 4px;
            border: 1px solid transparent;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>
</head>

<body>

<!--=============================================
=            Header One         =
=============================================-->

 @include('frontend.partials.header')


<!--=====  End of Header One  ======-->


<!-- Content laravel yield-->
@yield('content')

<!--=============================================
=            Footer         =
=============================================-->

@include('frontend.partials.footer')

<!--=====  End of Footer  ======-->

<!--=============================================
=            Quick view modal         =
=============================================-->
@yield('modal')

<!--=====  End of Quick view modal  ======-->


<!-- scroll to top  -->
<a href="#" class="scroll-top"></a>
<!-- end of scroll to top -->

<!-- JS
============================================ -->
<!-- jQuery JS -->
<script src="{{ asset('frontend/assets/js/vendor/jquery.min.js') }} "></script>

<!-- Popper JS -->
<script src="{{ asset('frontend/assets/js/popper.min.js') }} "></script>

<!-- Bootstrap JS -->
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }} "></script>

<!-- Plugins JS -->
<script src="{{ asset('frontend/assets/js/plugins.js') }} "></script>

<!-- Main JS -->
<script src="{{ asset('frontend/assets/js/main.js') }} "></script>

@stack('js')

</body>

</html>