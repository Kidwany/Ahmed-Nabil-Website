<div class="main" id="home">
    <div class="header_maininfo">
        <div class="container">
            <div class="dr_main_header_text">
                <ul class="top_main_main_info_icons">
                    <li><i class="fa fa-phone" aria-hidden="true"></i>{{$contact->phone}}</li>
                    <li class="second"><i class="fa fa-whatsapp" aria-hidden="true"></i>{{$contact->phone_alt}}</li>
                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="">{{$contact->email}}</a></li>
                </ul>
            </div>
            <div class="maininfo_social_icons">
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
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img class="stiimg" src="{{assetPath($setting->image->path)}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">الرئسية <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        عن الدكتور
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                        <li><a class="dropdown-item" href="{{url('/about')}}">د. احمد النبيل </a></li>
                        <li><a class="dropdown-item" href="{{url('/team')}}">فريق العمل</a></li>

                       {{-- <li><a class="dropdown-item" href="{{url('/about')}}">عيادة ايليت كير</a></li>--}}
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        الخدمات
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @if($mainServices)
                            @foreach($mainServices as $mainService)
                                <li class="dropdown-submenu">
                                    <a class="{{count($mainService->childService) > 0 ? 'dropdown-toggle' : ''}} " href="{{count($mainService->childService) > 0 ? '#' : url('service-details/' . $mainService->id)}}">{{$mainService->{'service_'.currentLang()}->title }}</a>
                                    @if(count($mainService->childService) > 0)
                                        <ul class="dropdown-menu">
                                        @foreach($mainService->childService as $childService)
                                            <li><a class="dropdown-item" href="{{url('service-details/' . $childService->id)}}"> {{$childService->{'service_'.currentLang()}->title }} </a></li>
                                        @endforeach
                                        </ul>
                                    @endif

                                </li>
                            @endforeach
                        @endif

                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('reserve')}}"> احجز معنا
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('offers')}}"> العروض
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('blog')}}"> خدمات المرضى
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        الاستوديو
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                        <li><a class="dropdown-item" href="{{url('album?type=image')}}">الصور </a></li>

                        <li><a class="dropdown-item" href="{{url('album?type=video')}}">الفيديوهات </a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/contact')}}">اتصل بنا
                    </a>
                </li>


            </ul>


        </div>
    </div>
</nav>
<!--   nab-bar-->

