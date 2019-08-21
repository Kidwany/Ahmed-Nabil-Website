@extends('website.layouts.layouts')
@section('title', 'احجز معنا')

@section('content')


    <section class="breadcrumb-area" style="background-image: url({{assetPath('website/en/images/0523-news-bariatricsurgery_WP-1024x458.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <h1>احجز معنا</h1>
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
                                <li><a href="index.html">الرئيسية</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li class="active">احجز معنا</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner -->

    <!-- about -->
    <div class="banner-bottom" id="about">
        <div class="container">
            <h2 class="dr_heade_tittle_main">بيانات الحجز</h2>
            <div class="book-appointment">
                <h4>اضف بياناتك</h4>
                <form action="#" method="post">
                    <div class="left-main same">
                        <div class="gaps">
                            <p>اسم المريض</p>
                            <input type="text" name="Patient Name" placeholder="" required=""/>
                        </div>
                        <div class="gaps">
                            <p>رقم الهاتف</p>
                            <input type="text" name="Number" placeholder="" required=""/>
                        </div>
                        <div class="gaps">
                            <p>البريد الاليكتروني</p>
                            <input type="email" name="email" placeholder="" required="" />
                        </div>
                        <div class="gaps">
                            <p>الرسالة..</p>
                            <textarea name="About Symptoms" placeholder="" required="" ></textarea>
                        </div>
                    </div>
                    <div class="right-maininfo same">
                        <div class="gaps">
                            <p>تاريخ الميلاد</p>
                            <input  id="datepicker1" name="Text" type="date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'شهر/يوم/سنة';}" required="">
                        </div>

                        <div class="gaps">
                            <p>الخدمات</p>
                            <select class="option">
                                <option></option>
                                <option>Cardiology</option>
                                <option>Ophthalmology</option>
                                <option>Neurology</option>
                                <option>Psychology</option>
                                <option>Dermatology</option>
                            </select>
                        </div>
                        <div class="gaps">
                            <p>النوع</p>
                            <select class="option">
                                <option></option>
                                <option>طفل</option>
                                <option>ذكر</option>
                                <option>انثى</option>
                            </select>
                        </div>
                        <div class="gaps">
                            <p>اختر الملف</p>
                            <input id="in1" type="file" multiple=false accept="image/*" onclick=openFile()>
                        </div>
                        <!--							 <div class="gaps">
                                                         <p>Time</p>
                                                             <input type="time" id="timepicker" name="Time" class="timepicker option" value="">
                                                     </div>-->
                    </div>
                    <div class="clearfix"></div>
                    <input type="submit" value="تأكيد الحجز">
                </form>
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
