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
        <link rel="stylesheet" href="{{asset('website/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/swiper.min.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/fotorama.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/lightgallery.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/featherIcons.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/lineaer-icons.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/line-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/elegant-icons.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/icofont.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/hamburgers.css')}}">
        <link rel="stylesheet" href="{{asset('website/css/index.css')}}">

    @endif

    @if(app()->getLocale() == 'ar')

    @endif


    @yield('customizedStyle')





</head>







<body>
<div id="app">
    <main>
        @yield('content')
    </main>
</div>






{{--<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>--}}
<!-- JS
============================================ -->
<!-- javascript libraries -->
<!-- JQuery Min JS -->
<script src="{{asset('website/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('website/js/bootstrap.min.js')}}"></script>
<script src="{{asset('website/js/popper.min.js')}}"></script>
<script src="{{asset('website/js/jquery.counterup.js')}}"></script>
<script src="{{asset('website/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('website/js/swiper.min.js')}}"></script>
<script src="{{asset('website/js/slick.min.js')}}"></script>
<script src="{{asset('website/js/aos.js')}}"></script>
<script src="{{asset('website/js/fotorama.js')}}"></script>
<script src="{{asset('website/js/lightgallery.js')}}"></script>
<script src="{{asset('website/js/lg-thumbnail.js')}}"></script>
<script src="{{asset('website/js/typed.min.js')}}"></script>
<script src="{{asset('website/js/index.js')}}"></script>

@yield('customizedScript')



</body>
</html>
