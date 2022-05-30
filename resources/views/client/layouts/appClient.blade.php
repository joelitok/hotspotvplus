<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<html lang="zxx">
<!--[if gt IE 8]> <!-->
<!--
<![endif]-->

<head>
    <!-- TITLE OF SITE -->
    <title>hotspotv+ </title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Pokpok - Repair HTML Template" />
    <meta name="keywords" content="Pokpok, Repair, one page, multipage, responsive, template" />
    <meta name="author" content="Pokpok">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{asset('frontend/images/favicon.png')}}">

    <!-- CSS Begins
================================================== -->
    <!--Animate Effect-->
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/hover.css')}}" rel="stylesheet">

    <!--Owl Carousel -->
    <link href="{{asset('frontend/css/owl.carousel.css')}}" rel="stylesheet">

    <!-- For Image Preview -->
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">

    <!--BootStrap -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/normalize.css')}}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">

    <!--[if IE]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- ::::::::::::::::::::::::::: Start: Preloader section ::::::::::::::::::::::::::: -->
    <div id="preloader"></div>
    <!-- ::::::::::::::::::::::::::: End: Preloader section ::::::::::::::::::::::::::: -->

@include('client.include.header')
<!-- End: header navigation -->
{{-- start body --}}

@yield('content')

{{-- end body --}}
<!-- Start:Footer Section 
==================================================-->
@include('client.include.footer')
<!-- End:Footer Section 
========================================-->

<!-- Scripts
========================================-->
<!-- jquery -->
<script src="{{asset('frontend/js/jquery-1.12.4.min.js')}}"></script>
<!-- plugins -->
<script src="{{asset('frontend/js/plugins.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>

<!-- Custom Scripts
========================================-->
<script src="{{asset('frontend/js/main.js')}}"></script>

</body>

</html>

















