@extends('website.layouts.layouts')
@section('title', 'من نحن')

@section('content')


    <!-- banner -->
    <section class="breadcrumb-area" style="background-image: url({{assetPath('website/en/images/0523-news-bariatricsurgery_WP-1024x458.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <h1>فريق العمل</h1>
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
                                <li class="active">فريق العمل</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about -->



    <div class="team" id="team">
        <div class="container">
            <div class="team-mainrow">


                <div class="col-md-5 drabout-img">
                    <img src="{{$ceo ? assetPath($ceo->image->path) : ''}}" alt=" " class="img-responsive">
                </div>

                <div class="col-md-7 col-sm-7 drabout-img two">
                    <div class="drteam-text">
                        <h5 class="main-subtitle">{{$ceo->{'team_'.currentLang()}->name }}</h5>
                        <p>{{$ceo->{'team_'.currentLang()}->description}}</p>


                        <div class="read">
                            <a href="{{url('/')}}" class="hvr-rectangle-in">اقرأ المزيد</a>
                        </div>

                    </div>
                </div>

                <div class="clearfix"> </div>
            </div>

            @foreach($mainServices as $service)
                <div class="row">
                    <div class="dr-team-row">
                        <div class="container">
                            @if(count($service->team) != 0)
                                <h1>{{$service->{'service_'.currentLang()}->title }}</h1>
                            @endif
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        @foreach($service->team as $member)
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="dr-mainrow">
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                            <div class="team-img">
                                                                <img src="{{$member->image->path}}" alt=" " class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6">

                                                            <div class="team-text">
                                                                <h5 class="main-subtitle">{{$member->{'team_'.currentLang()}->name }}</h5>
                                                                <p>{{$member->{'team_'.currentLang()}->description }} </p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
    <!-- testimonial -->

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
