@extends('website.layouts.layouts')
@section('title', 'من نحن')

@section('content')


    <!-- banner -->
    <section class="breadcrumb-area" style="background-image: url({{assetPath('website/en/images/0523-news-bariatricsurgery_WP-1024x458.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <h1>من نحن</h1>
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
                                <li class="active">من نحن</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about -->

    <div class="page-about" id="about">
        <div class="container">
            <h2 class="dr_heade_tittle_main">د. احمد نبيل</h2>
            <div class="row">
                <div class="col-sm-7">
                    <div class="box left">
                        <h5 class="main-subtitle">نحن نهتم بصحتكم</h5>
                        <p>
                            {{$about->{'about_'.currentLang()}->description }}
                        </p>

                        <h5 class="main-subtitle">خبرتنا</h5>
                        <p>{{$about->{'about_'.currentLang()}->value }}</p>

                        <h5 class="main-subtitle">Qualifications</h5>
                        <p><span> - </span> Fellowship of Obesity and Endoscopy Surgery, University of Milan, Italy.</p>
                        <p><span> - </span> Endoscopic Surgery Fellowship - University of Dundee, Scotland.</p>
                        <p><span> - </span> Doctor of Surgery, Ain Shams University, Egypt.</p>
                        <p><span> - </span> Doctor of Philosophy in Vascular Surgery - Ain Shams University.</p>
                        <p><span> - </span> Fellowship of Royal College of Surgeons, England.</p>

                        <h5 class="main-subtitle">Vision</h5>
                        <p>
                            {{$about->{'about_'.currentLang()}->vision }}
                        </p>

                        <h5 class="main-subtitle">Mission</h5>
                        <p>
                            {{$about->{'about_'.currentLang()}->mission }}
                        </p>

                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="box right">
                        <img src="{{assetPath('website/en/images/about.png')}}" class="img-responsive">
                        {{--<iframe width="100%" height="300" src="https://www.youtube.com/embed/BQY98zo8kU0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
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
