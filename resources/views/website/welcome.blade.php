@extends('website.layouts.layouts')
@section('title', 'الرئيسية')

@section('content')


    <!-- slider -->
    <div class="slider-home">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @if($slides)
                    @foreach($slides as $slide)
                        <div class="carousel-item slid-a active">
                            <div class="content-slider">
                                <a href="{{$slide->url}}"><img src="{{assetPath($slide->image->path)}}" alt=""></a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
    </div>
    <!-- //slider -->

    <!-- about -->
    <div class="about" id="about">
        <div class="container">
            <h2 class="dr_heade_tittle_main">مرحبا بكم في <span>عيادة د. احمد نبيل</span></h2>
            <div class="about-main">
                <div class="row">

                    <div class="col-md-5 drabout-img">

                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <div class="details-img-slider">
                                            <div class="owl-carousel owl-doctor owl-theme">
                                                @if($members)
                                                    @foreach($members as $member)
                                                        <img data-hash="img-{{$member->id}}" class="img-details" src="{{assetPath($member->image->path)}}">
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="hash-slider">

                                            @if($members)
                                                @foreach($members as $member)
                                                    <a href="#img-{{$member->id}}">
                                                        <img class="img-hash" src="{{assetPath($member->image->path)}}">
                                                    </a>
                                                @endforeach
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






                    <div class="col-md-7 col-sm-7 drabout-img two">
                        <div class="drabout-text">
                            <h5 class="main-subtitle">هدفنا ان نهتم بمظهرك المثالي</h5>
                            <p>{{$about->{'about_'.currentLang()}->description }}</p>

                            <div class="read">
                                <a href="{{url('about')}}" class="hvr-rectangle-in">اعرف المزيد</a>
                                <!--<a href="team.html" class="hvr-rectangle-in">Our Team</a>-->

                            </div>


                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- /about-bottom -->

    <section class="services">
        <div class="container">

            <div class="heading">
                <h2>
                    خدماتنا
                    <img src="{{assetPath('website/ar/images/services_line.png')}}" alt="services-line">
                </h2>
            </div>
            <div class="row">
                <!--Start row-->


                @if($mainServices)
                    @foreach($mainServices as $service)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <figure class="snip1104"><a href="{{url('service-details/'.$service->id)}}"></a><img src="{{assetPath($service->image->path)}}" alt="sample35" />
                                <figcaption>
                                    <h2>{{$service->{'service_'.currentLang()}->title }}</h2>
                                </figcaption>
                            </figure>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!--============= Start contact_home =============-->
    <section class="contact_home">
        <div class="overlay">
            <!--Start overlay-->
            <div class="container">
                <!--Start Container-->
                <!--                        <div class="heading text-center">
                            <h3>appointment booking</h3>
                            <img src="images/contact_heading.png" alt="contact-heading">
                        </div> -->
                <div class="row">
                    <!--Start row-->

                    <div class="col-lg-6">
                        <div class="box-right">
                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/BQY98zo8kU0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xs-12">

                        <div class="well-block">
                            <div class="well-title">
                                <h2>احجز معنا</h2>
                            </div>
                            <form>
                                <!-- Form start -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="name"> الاسم</label>
                                            <input id="name" name="name" type="text" placeholder="الاسم" class="form-control input-md">
                                            <span class="fa fa-user"></span>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="email">البريد الاليكترونى</label>
                                            <input id="email" name="email" type="text" placeholder="البريد الاليكترونى" class="form-control input-md">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                    </div>
                                    <!-- Text input
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="date">Preferred Date</label>
                                            <input id="date" name="date" type="text" placeholder="Preferred Date" class="form-control input-md">
                                            <span class="fa fa-calendar"></span>
                                        </div>
                                    </div>-->
                                    <!-- Select Basic -->
                                    <!--                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="time">Preferred Time</label>
                                            <select id="time" name="time" class="form-control">
                                                <option value="8:00 to 9:00">8:00 to 9:00</option>
                                                <option value="9:00 to 10:00">9:00 to 10:00</option>
                                                <option value="10:00 to 1:00">10:00 to 1:00</option>
                                            </select>
                                            <span class="fa fa-calendar"></span>

                                        </div>
                                    </div>-->
                                    <!-- Select Basic -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" for="appointmentfor">حجز ل</label>
                                            <select id="appointmentfor" name="appointmentfor" class="form-control">
                                                <option value="Service#1">تكميم المعدة#1</option>
                                                <option value="Service#2">تحويل مسار#2</option>
                                                <option value="Service#3">بالون المعدة#3</option>
                                                <option value="Service#4">علاج المناظير#4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <a href="appointment.html" class="hvr-rectangle-in">الدخول للحجز</a>
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- form end -->
                        </div>
                        <!--                                <form class="requestForm">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12">
                                            <div class="input-group">
                                                <i class="fa fa-user fa-fw"></i>
                                                <input type="text" name="f_name" placeholder=" First name*">
                                            </div>
                                        </div>
                                         <div class="col-md-4 col-xs-12">
                                            <div class="input-group">
                                                <i class="fa fa-user fa-fw"></i>
                                                <input type="text" name="l_name" placeholder="Last name*">
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-xs-12">
                                            <div class="input-group">
                                                <i class="fa fa-envelope fa-fw"></i>
                                                <input class="cal" name="mail" type="text" placeholder="Email*">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 col-xs-12">
                                            <div class="input-group">
                                                <i class="fa fa-mobile fa-fw"></i>
                                                <input type="number" name="phone" placeholder="mobile*">
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-xs-12">
                                            <div class="input-group">
                                                <i class="fa fa-calendar fa-fw"></i>
                                                <input class="cal datePickerInput hasDatepicker" name="date" autocomplete="off" placeholder="date*" id="dp1547557873125">
                                            </div>
                                        </div>
                                         <div class="col-md-4 col-xs-12">
                                            <div class="input-group first-one">
                                                  <label class="radio-inline">
                                                        <input type="radio" name="gender" id="inlineRadio1" checked="" value="Male">&nbsp;&nbsp;&nbsp;&nbsp; Male
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="gender" id="inlineRadio2" value="Female">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Female
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="gender" id="inlineRadio3" value="Child">&nbsp;&nbsp;&nbsp;&nbsp; Child
                                                    </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <i class="fa fa-pencil fa-fw"></i>
                                        <textarea name="note" placeholder="message*"></textarea>
                                    </div>
                                    <input type="hidden" name="action" value="makeRequest">
                                    <div class="input-group">
                                        <button name="note" type="submit"> reserve <i class="fa fa-paper-plane"></i></button>
                                    </div>
                            </form> -->
                        <div class="requestResult"></div>
                        <!--   <script>
                            $(document).ready(function() {
                                // start request code
                                $('#quote-carousel').carousel({
                                    pause:"hover"
                                })
                                // end request code
                            });

                        </script> -->
                    </div>

                </div>
                <!--End row-->
            </div>
            <!--End Container-->
        </div>
        <!--End overlay-->
    </section>
    <!--============= end contact_home =============-->
    <div class="rs-calculate-valu pt-100 bg4">
        <div class="container">
            <div class="row rs-vertical-bottom">
                <div class="col-lg-4 hidden-md">
                    <div class="fitness-image fitness-box">
                        <img src="{{assetPath('website/en/images/bmi.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="section-title white-text">
                        <h2>احسب كتلة الجسم</h2>
                    </div>
                    <div class="row left-area">
                        <div class="col-lg-6">
                            <div class="input-form fitness-box">
                                <form name=BMI class="bmi-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-inner">
                                                <label>الطول: </label><br>

                                                <input id="your-height" type=text name=ht size=5 onkeyup="conv(3)" class='innerc resform' placeholder="">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-inner">
                                                <label>الوزن: </label><br>
                                                <input type=text name="wg" id="weight" size=5 placeholder="">
                                                <select name=opt1 onChange="unit()" value="kilograms" >
                                                    <option value="kilograms" selected>Kilograms</option>
                                                </select>
                                                <div class="form-btn">
                                                    <input type="submit" class="BMI-btn-calculate" name="cc" value="Calculate" onClick="calc()">
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="BMI-result">
                                        <span class="BMI-text">كتلة جسمك :</span>
                                        <input type=text readonly class="resform" name="si">
                                        <input type="text" name="desc" size="30" class="content border-none" readonly>
                                        <div class="bmi-ideal">
                                            الوزن المثالي:
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="fitness-chart fitness-box">
                                <span class="chart-tilte">BMI Categories</span>
                                <ul class="velue-list">
                                    <li>BMI Below 18.50</li>
                                    <li>Underweight</li>
                                    <li>BMI 18.50 - 24.99</li>
                                    <li>Healthy Weight</li>
                                    <li>BMI 25.00 - 29.99</li>
                                    <li>Overweight</li>
                                    <li>BMI 30 - 34.99</li>
                                    <li>Obese Class 1</li>
                                    <li>BMI 35 - 39.99</li>
                                    <li>Obese Class 2</li>
                                    <li>BMI 40 - 49.99</li>
                                    <li>Morbid Obese</li>
                                    <li>BMI 50 - 59.99</li>
                                    <li>Super Morbid Obese</li>
                                </ul>
                            </div>
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

    <div class="map_main">
        <iframe id="gmap_canvas" src="{{$contact->location}}" width="100%" height="500" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>

    </div>


@endsection
