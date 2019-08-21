@extends('website.layouts.layouts')
@section('title', 'من نحن')

@section('content')


    <!-- banner -->
    <section class="breadcrumb-area" style="background-image: url({{assetPath('website/en/images/0523-news-bariatricsurgery_WP-1024x458.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <h1>اتصل بنا</h1>
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
                                <li class="active">تواصل معنا</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="contact-2 content-area-5">
        <div class="container">
            <!-- Main title -->
            <div class="main-title text-center">
                <h1>أتصل بنا</h1>
            </div>
            <!-- Contact info -->
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="contact-info text-center">
                            <i class="fa fa-whatsapp font-36 mb-10 text-theme-colored"></i>
                            <h4>ارقامنا</h4>
                            <h6 class="text-gray"> {{$contact->phone}}</h6>
                            <h6 class="text-gray"> {{$contact->phone_alt}}</h6>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="contact-info text-center">
                            <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                            <h4>العنوان</h4>
                            <h6 class="text-gray">{{$contact->{'address_'.currentLang()} }}</h6>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="contact-info text-center">
                            <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                            <h4>البريد الاليكتروني</h4>
                            <h6 class="text-gray">{{$contact->email}}</h6>
                        </div>
                    </div>
                </div>
            </div>


            @include('dashboard.layouts.messages')
            <form action="{{url('message')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group name">
                                    <input type="text" name="name" class="form-control" placeholder="{{__('trans.form_name')}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group email">
                                    <input type="email" name="email" class="form-control" placeholder="{{__('trans.email')}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group subject">
                                    <input type="text" name="title" class="form-control" placeholder="{{__('trans.message_title')}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group number">
                                    <input type="text" name="phone" class="form-control" placeholder="{{__('trans.form_phone')}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group number">
                                    <input id="in1" type="file" name="file_id">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group message">
                                    <textarea class="form-control" name="message" placeholder=" {{__('trans.message')}}"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="send-btn text-center">
                                    <button type="submit" class="btn btn-md button-theme">{{__('trans.send')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="opening-hours bg-light">
                            <h3>مواعيد العيادة</h3>
                            <ul class="list-style-none">
                                <li><strong>{{__('trans.sat')}}</strong> <span class="text-red"> {{__('trans.closed')}}</span></li>
                                <li><strong>{{__('trans.sun')}}</strong> <span> 10 AM - 8 PM</span></li>
                                <li><strong>{{__('trans.mon')}}</strong> <span> 10 AM - 8 PM</span></li>
                                <li><strong>{{__('trans.tue')}} </strong> <span> 10 AM - 8 PM</span></li>
                                <li><strong>{{__('trans.wed')}} </strong> <span> 10 AM - 8 PM</span></li>
                                <li><strong>{{__('trans.thu')}} </strong> <span> 10 AM - 8 PM</span></li>
                                <li><strong>{{__('trans.fri')}} </strong> <span> 10 AM - 8 PM</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
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
