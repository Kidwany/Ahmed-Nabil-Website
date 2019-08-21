<!-- footer -->
<div class="footer">
    <div class="container">
        <!--            <h4>Subscribe to <span>Newsletter</span></h4>-->
        <!--            <form action="#" method="post">
            <input type="email" name="Email" placeholder="Enter Your Email..." required="">
            <input type="submit" value="Send">
        </form>-->
        <div class="main_footer_copy">
            <div class="drmain_footer_grids">
                <div class="col-md-4 drmain_footer_grid">
                    <h3>عن العيادة</h3>
                    <p>
                        {{$about->{'about_'.currentLang()}->description }}
                    </p>
                </div>
                <div class="col-md-4 drmain_footer_grid">
                    <h3>تواصل معنا</h3>
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$contact->{'address_'.currentLang()} }}</li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="">{{$contact->email}}</a></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>{{$contact->phone}}</li>
                        <li><i class="fa fa-whatsapp" aria-hidden="true"></i>{{$contact->phone_alt}}</li>
                    </ul>
                </div>
                <div class="col-md-2 drmain_footer_grid drmain_footer_grid1">
                    <h3>روابط سريعة</h3>
                    <ul>
                        <li><span class="fa fa-long-arrow-left" aria-hidden="true"></span><a href="{{url('/')}}">الرئيسية</a></li>
                        <li><span class="fa fa-long-arrow-left" aria-hidden="true"></span><a href="{{url('/appointment')}}">احجز معنا</a></li>
                        <li><span class="fa fa-long-arrow-left" aria-hidden="true"></span><a href="{{url('/images')}}">الصور</a></li>
                        <li><span class="fa fa-long-arrow-left" aria-hidden="true"></span><a href="{{url('/about')}}">عن الدكتور</a></li>
                        <li><span class="fa fa-long-arrow-left" aria-hidden="true"></span><a href="{{url('/contact')}}">اتصل بنا</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <div class="box-logo">
                        <img src="{{assetPath(setting()->image->path)}}" alt="">
                    </div>
                </div>


                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="dr_main_copy_right_social">

            <div class="col-md-6 dr_main_copy_right">
                <ul class="main_social_list">
                    @if($contact->facebook)
                        <li><a href="{{$contact->facebook}}" class="dr_main_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    @endif

                    @if($contact->twitter)
                        <li><a href="{{$contact->twitter}}" class="main_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    @endif

                    @if($contact->youtube)
                        <li><a href="{{$contact->youtube}}" class="dr_youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    @endif

                    @if($contact->instagram)
                        <li><a href="{{$contact->instagram}}" class="dr_instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    @endif

                    @if($contact->google_plus)
                        <li><a href="{{$contact->google_plus}}" class="dr_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    @endif
                </ul>
            </div>
            <div class="col-md-6 main_copy_right">
                <p>جميع الحقوق محفوظة لشركة 2018 <a href="">بي جروب</a></p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //footer -->
