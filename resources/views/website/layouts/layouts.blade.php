<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{app()->getLocale() == 'ar' ? 'rtl' : 'ltr'}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{!! __('trans.website_title') !!} - @yield('title')</title>

    <!-- CSS ============================================ -->

    <link rel="icon" type="image/png" href="{{asset('website/images/favicon.png')}}">

    @if(app()->getLocale() == 'en')

        <!-- //for-meta-tags-->
            <link href="{{assetPath('website/en/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
            <link href="{{assetPath('website/en/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css" media="all">
            <link href="{{assetPath('website/en/css/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css" media="all">

            <link href="{{assetPath('website/en/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all">
            <link href="{{assetPath('website/en/css/style.css')}}" rel="stylesheet" type="text/css" media="all">
            <!-- font-awesome icons -->
            <link href="{{assetPath('website/en/css/font-awesome.css')}}" rel="stylesheet">
            <!-- //font-awesome icons -->

    @endif

    @if(app()->getLocale() == 'ar')
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- //for-meta-tags-->
        <link href="{{assetPath('website/ar/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
        <link href="{{assetPath('website/ar/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css" media="all">
        <link href="{{assetPath('website/ar/css/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css" media="all">

        <link href="{{assetPath('website/ar/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="{{assetPath('website/ar/css/bootstrap-rtl.css')}}">

        <link href="{{assetPath('website/ar/css/style.css')}}" rel="stylesheet" type="text/css" media="all">
        <!-- font-awesome icons -->
        <link href="{{assetPath('website/ar/css/font-awesome.css')}}" rel="stylesheet">
    @endif


    @yield('customizedStyle')





</head>







<body>
<div id="app">
    <main>
        @include('website.layouts.header')
        @yield('content')
        @include('website.layouts.footer')
    </main>
</div>



<!-- //footer -->
<a href="#" id="toTop" style="display: block;"><span id="toTopHover"></span> <span id="toTopHover" style="opacity: 1;"> </span></a>


{{--<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>--}}
<!-- JS
============================================ -->
<!-- javascript libraries -->
<!-- JQuery Min JS -->
<script src="{{assetPath('website/ar/js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{assetPath('website/ar/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{assetPath('website/ar/js/easing.js')}}"></script>
<script src="{{assetPath('website/ar/js/main.js')}}"></script>
<script src="{{assetPath('website/ar/js/bmi.js')}}"></script>
<script src="{{assetPath('website/ar/js/owl.carousel.min.js')}}"></script>
<script src="{{assetPath('website/ar/js/bootstrap.min.js')}}"></script>
<script src="{{assetPath('website/ar/js/bootstrap.min.js')}}"></script>
<script src="{{assetPath('website/ar/js/custom.js')}}"></script>

@yield('customizedScript')



</body>
</html>
