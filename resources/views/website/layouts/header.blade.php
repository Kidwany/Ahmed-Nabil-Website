<!-- start header -->
<div class="header-md">
    <div class="logo-lines">
        <div class="container">
            <div class="lines hamburger hamburger--elastic">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
            <div class="logo-img">
                <a href="{{url('/')}}">
                    <img src="{{asset($setting->image->path)}}" alt="img">
                </a>
            </div>
            <div class="lang-dots">
                <div class="lang">
            <span>
              AR
            </span>
                </div>
                <div class="dots">
                    <div class="dots-icon">
                        <i class="la la-ellipsis-h"></i>
                    </div>
                    <div class="dots-social">
                        <div class="social-header">
                            <p>
                                Follow Me
                            </p>
                        </div>
                        <ul class="social-links">
                            <li>
                                <a href="#">
                                    <i class="social_facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="social_twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="social_instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="social_youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-header-md-ul-div">
        <ul class="main-header-md-ul">
            <li class="active-li">
                <a href="{{url('/')}}">
            <span>
              {!! __('trans.home') !!}
            </span>
                </a>
            </li>
            <li class="drop-li">
                <a href="" class="drop-a">
            <span>
              {!! __('trans.services') !!}
            </span>
                    <i class="feather icon-chevron-down"></i>
                </a>
                <ul class="dropped-ul">
                    @if($services)
                        @foreach($services as $service)
                            <li>
                                <a href="{{url('serviceDetails/'.$service->id)}}">
                                    <span>
                                        {{$service->{'service_'.currentLang()}->title }}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    @endif


                </ul>
            </li>
            <li>
                <a href="{{url('gallery')}}">
                    <span>
                        {!! __('trans.gallery') !!}
                    </span>
                </a>
            </li>
            <li>
                <a href="{{url('contact')}}">
                    <span>
                        {!! __('trans.contact') !!}
                    </span>
                </a>
            </li>
            <li>
                <a href="{{url('about')}}">
                    <span>
                        {!! __('trans.about') !!}
                    </span>
                </a>
            </li>
            <li>
                <a href="#" class="login-link">
                    <span>
                        Login
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="header-lg">
    <div class="container">
        <ul class="main-header-lg-ul">
            <li class="active-li">
                <a href="{{url('/')}}">
            <span>
              {!! __('trans.home') !!}
            </span>
                </a>
            </li>
            <li class="hover-li">
                <a class="hover-a">
            <span>
              {!! __('trans.services') !!}
            </span>
                    <i class="lnr lnr-chevron-down"></i>
                </a>
                <ul class="hovered-ul">
                    @if($services)
                        @foreach($services as $service)
                            <li>
                                <a href="{{url('serviceDetails/'.$service->id)}}">
                                    <span>
                                        {{$service->{'service_'.currentLang()}->title }}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </li>
            <li>
                <a href="{{url('gallery')}}">
                    <span>
                         {!! __('trans.gallery') !!}
                    </span>
                </a>
            </li>
            <li>
                <a href="{{url('/')}}" class="img-logo">
                    <img src="{{asset($setting->image->path)}}" alt="img">
                </a>
            </li>
            <li>
                <a href="{{url('contact')}}">
                    <span>
                        {!! __('trans.contact') !!}
                    </span>
                </a>
            </li>
            <li>
                <a href="{{url('about')}}">
                    <span>
                        {!! __('trans.about') !!}
                    </span>
                </a>
            </li>
            <li>
                <a href="#" class="login-link">
                    <i class="feather icon-log-in"></i>
                    <span>
                        Login
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- end header -->
