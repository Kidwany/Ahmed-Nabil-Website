@extends('website.layouts.layouts')
@section('title', 'من نحن')

@section('content')


    <!-- banner -->
    <section class="breadcrumb-area" style="background-image: url({{assetPath('website/en/images/0523-news-bariatricsurgery_WP-1024x458.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <h1>{{$singleService->{'service_'.currentLang()}->title }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="left pull-left">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li class="active">الخدمات</li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li class="active">{{$singleService->{'service_'.currentLang()}->title }}</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about -->
    <div class="page-about " id="about">
        <div class="container">
            <h2 class="dr_heade_tittle_main">{{$singleService->{'service_'.currentLang()}->title }}</h2>
            <div class="row">
                <div class="col-sm-7">
                    <div class="box left">
                        <h5 class="main-subtitle">{{$singleService->{'service_'.currentLang()}->slug }}</h5>
                        <p>{{$singleService->{'service_'.currentLang()}->description }}</p>

                    </div>
                    <a href="{{url('reserve')}}"> Book An Appointment</a>
                </div>
                <div class="col-sm-5">
                    <div class="box right">
                        <img src="{{assetPath($singleService->image->path)}}" class="img-responsive">
                        @if($singleService->video_id)
                            <iframe width="100%" height="300" src="{{$singleService->video->url}}"
                                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        @endif

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- //about -->


    <!-- testimonial -->
    <div class="testimonial">
        <div class="container">
            <h2 class="dr_heade_tittle_main">اراء العملاء</h2>
            <div class='row'>
                <div class='col-md-offset-2 col-md-8'>
                    <div class="owl-carousel owl-testimonial owl-theme">
                        <!-- Bottom Carousel Indicators -->
                        <!--
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#quote-carousel" data-slide-to="1"></li>
                            <li data-target="#quote-carousel" data-slide-to="2"></li>
                        </ol>
-->
                        <!-- Carousel Slides / Quotes -->

                    @if($testimonials)
                        @foreach($testimonials as $testimonial)
                            <!-- Quote 1 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-3 text-center">
                                                <img class="img-circle" src="{{assetPath($testimonial->image->path)}}">
                                            </div>
                                            <div class="col-sm-9">
                                                <p>{{$testimonial->{'testimonial_'.currentLang()}->text }}</p>
                                                <small>{{$testimonial->{'testimonial_'.currentLang()}->username }}</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                            @endforeach
                        @endif
                    </div>
                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- //testimonial -->


@endsection
