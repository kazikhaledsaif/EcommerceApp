<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') |  {{ config('app.name', 'VirtualEchos') }} </title>
    <meta name="description" content="Grocery | Essentials">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <meta name = "viewport" content = "width=device-width, minimum-scale=1, maximum-scale = 1, user-scalable = no">

    <link rel="icon" href="{{ asset('frontend/assets/images/favicon.ico') }}">

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    <link href="{{ asset('frontend/assets/css/footer.min.css') }}" rel="stylesheet">

    @stack('css')
    <!-- Modernizer JS -->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '3270257846540705');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1"
             src="https://www.facebook.com/tr?id=3270257846540705&ev=PageView
&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J136FSRQ4E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-J136FSRQ4E');
    </script>
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
{{--<a href="#" class="scroll-top"></a>--}}
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

@include('flashy::message')

    @include('sweetalert::cdn')
    @include('sweetalert::view')


@stack('scripts')
@stack('js')



</body>

</html>
