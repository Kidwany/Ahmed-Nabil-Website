@extends('website.layouts.layouts')
@section('title', 'العروض')

@section('content')


    <!-- banner -->
    <section class="breadcrumb-area" style="background-image: url({{assetPath('website/en/images/0523-news-bariatricsurgery_WP-1024x458.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <h1>العروض</h1>
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
                                <li><a href="index.html">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li class="active">Service</li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li class="active">Sleeve gastrectomy</li>
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
            <h2 class="dr_heade_tittle_main">Service Name</h2>
            <div class="row">
                <div class="col-sm-7">
                    <div class="box left">
                        <h5 class="main-subtitle">We Care About Your Health</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante.
                            Praesent nulla nunc, pretium dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante.
                            Praesent nulla nunc, pretium dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet</p>


                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="box right">
                        <img src="{{assetPath('website/en/images/g4.jpg')}}" class="img-responsive">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <div class="box left">
                        <h5 class="main-subtitle">We Care About Your Health</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante.
                            Praesent nulla nunc, pretium dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante.
                            Praesent nulla nunc, pretium dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet</p>


                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="box right">
                        <img src="{{assetPath('website/en/images/g4.jpg')}}" class="img-responsive">

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
