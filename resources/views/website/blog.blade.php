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



    <section class="blog" id="blog">
        <div class="container"><!--Start Container-->
            <div class="row"><!--Start row-->

                @if($blogs)
                    @foreach($blogs as $blog)
                        <div class="col-sm-6">
                            <a href="{{url('blog/' . $blog->id)}}">
                            </a>
                            <div class="card"><a href="{{url('blog/' . $blog->id)}}">
                                    <img src="{{$blog->image->path}}" class="img-responsive">
                                </a>
                                <div class="card-info"><a href="{{url('blog/' . $blog->id)}}">
                                        <h4>{{$blog->{'blog_'.currentLang()}->title }}</h4>
                                        <p>{{$blog->{'blog_'.currentLang()}->body }}</p>
                                    </a>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-8 text-left">
                                            <p> {{$blog->created_at->format('Y-m-d') }}</p>
                                        </div>
                                        <div class="col-sm-4 text-right">
                                            <!--<a href=""><i class="fa fa-file-text fa-fw"></i> </a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                @endif


            </div><!--End row-->
          {{--  <div class="text-center">
                <ul class="pagination"><li><span class="disabled">«</span></li><li class="active"><a>1</a></li><li><a class="pagination" href="info.html">2</a></li><li><a class="next" href="info.html"> »</a></li></ul>
            </div>
--}}

        </div><!--End Container-->
    </section>




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
