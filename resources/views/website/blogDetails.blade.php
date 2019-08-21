@extends('website.layouts.layouts')
@section('title', 'خدمات المرضى')

@section('content')


    <section class="breadcrumb-area" style="background-image: url({{assetPath('website/en/images/0523-news-bariatricsurgery_WP-1024x458.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <h1>خدمات المرضى</h1>
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
                                <li><a href="{{url('/')}}">الرئيسية</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li class="active">Latest News</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="single-blog sections">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-12">
                    <div class="box-single-blog-img">
                        <img src="{{$blog->image->path}}" alt="">
                    </div>
                    <div class="box-single-blog-info">
                        <h3>{{$blog->{'blog_'.currentLang()}->title }}</h3>

                        <p>lorem</p>
                        <p>{{$blog->{'blog_'.currentLang()}->body }}</p>


                    </div>
                </div>


                <div class="col-lg-3 col-md-12">
                    <div class="box-news-left">

                        <hr>

                        <h4 class="b">  latest posts</h4>
                        <div class="row">
                            @if($latestPosts)
                                @foreach($latestPosts as $post)
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <a href="{{url('blog/'.$post->id)}}">
                                            <div class="box-min-news">
                                                <img src="{{$blog->image->path}}" alt="">
                                                <p>  {{$blog->{'blog_'.currentLang()}->title }}</p>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

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
