<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pataku - Furniture eCommerce Bootstrap4 Template</title>
    <meta name="description" content="">
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