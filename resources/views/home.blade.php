@extends('layouts.main')

@section('content')



<section class="hero-wrapper hero-1">
    <div class="hero-slider-active transland-dots">
        <div class="single-slide">
            <div class="slide-bg bg-cover wow zoomIn"
                style="background-image: url('assets/img/slider/home-banner-01.jpg');">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xxl-6 col-lg-8 col-sm-10">
                        <div class="hero-contents pe-lg-3 text-white">
                            <h1 class="fs-lg animated gradient-text3 " data-animation-in="fadeInRight"
                                data-delay-in="0.2">@lang('messages.Hero_Head')</h1>
                            <p class="pe-lg-5 mb-4 animated" data-animation-in="fadeInRight" data-delay-in="0.5">
                                @lang('messages.Hero_Detail')</p>
                            <a href="{{ route('services') }}" data-animation-in="fadeInRight" data-delay-in="0.8"
                                class="theme-btn border-style me-sm-4 mt-4 animated">@lang('messages.Hero_Button_Service')</a>
                            <a href="{{ route('story') }}" data-animation-in="fadeInRight" data-delay-in="0.8"
                                class="theme-btn border-style me-sm-4 mt-4">@lang('messages.Hero_Button_Our_Story')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-pop-video-box-wrapper d-flex text-white align-items-center"
                data-animation-in="fadeInRight" data-delay-in="1s">
                <div class="text col-6">
                    <h6>@lang('messages.Manu_Vdo') &nbsp;<i class="fal fa-long-arrow-right"></i></h6>
                </div>
                <div class="video-wrapper bg-overlay bg-cover bg-center col-6 justify-content-center align-items-center"
                    style="background-image: url('https://i.ytimg.com/vi/FgAP5USUOOA/maxresdefault.jpg')">
                    <a href="https://www.youtube.com/watch?v=FgAP5USUOOA" class="popup-video play-video"><i
                            class="fas fa-play"></i></a>
                </div>
            </div>
        </div>

        <div class="single-slide">
            <div class="slide-bg bg-cover" style="background-image: url('assets/img/slider/home-banner-03.jpg');">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xxl-6 col-lg-8 col-sm-10">
                        <div class="hero-contents pe-lg-3 text-white">
                            <h1 class="fs-lg animated gradient-text3 " data-animation-in="fadeInRight"
                                data-delay-in="0.2">@lang('messages.Hero_Head')</h1>
                            <p class="pe-lg-5 mb-4" data-animation-in="fadeInRight" data-delay-in="0.5">
                                @lang('messages.Hero_Detail')</p>
                            <a href="{{ route('services') }}" data-animation-in="fadeInRight" data-delay-in="0.8"
                                class="theme-btn border-style me-sm-4 mt-4">@lang('messages.Hero_Button_Service')</a>
                            <a href="{{ route('story') }}" data-animation-in="fadeInRight" data-delay-in="0.8"
                                class="theme-btn border-style me-sm-4 mt-4">@lang('messages.Hero_Button_Our_Story')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-pop-video-box-wrapper d-flex text-white align-items-center"
                data-animation-in="fadeInRight" data-delay-in="1s">
                <div class="text col-6">
                    <h6>@lang('messages.Manu_Vdo') &nbsp;<i class="fal fa-long-arrow-right"></i></h6>
                </div>
                <div class="video-wrapper bg-overlay bg-cover bg-center col-6 justify-content-center align-items-center"
                    style="background-image: url('https://i.ytimg.com/vi/FgAP5USUOOA/maxresdefault.jpg')">
                    <a href="https://www.youtube.com/watch?v=FgAP5USUOOA" class="popup-video play-video"><i
                            class="fas fa-play"></i></a>
                </div>
            </div>
        </div>

        <div class="single-slide">
            <div class="slide-bg bg-cover" style="background-image: url('assets/img/slider/home-banner-04.jpg');">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xxl-6 col-lg-8 col-sm-10">
                        <div class="hero-contents pe-lg-3 text-white">
                            <h1 class="fs-lg animated gradient-text3 " data-animation-in="fadeInRight"
                                data-delay-in="0.2">@lang('messages.Hero_Head')</h1>
                            <p class="pe-lg-5 mb-4" data-animation-in="fadeInRight" data-delay-in="0.5">
                                @lang('messages.Hero_Detail')</p>
                            <a href="{{ route('services') }}" data-animation-in="fadeInRight" data-delay-in="0.8"
                                class="theme-btn border-style me-sm-4 mt-4">@lang('messages.Hero_Button_Service')</a>
                            <a href="{{ route('story') }}" data-animation-in="fadeInRight" data-delay-in="0.8"
                                class="theme-btn border-style me-sm-4 mt-4">@lang('messages.Hero_Button_Our_Story')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-pop-video-box-wrapper d-flex text-white align-items-center"
                data-animation-in="fadeInRight" data-delay-in="1s">
                <div class="text col-6">
                    <h6>@lang('messages.Manu_Vdo') &nbsp;<i class="fal fa-long-arrow-right"></i></h6>
                </div>
                <div class="video-wrapper bg-overlay bg-cover bg-center col-6 justify-content-center align-items-center"
                    style="background-image: url('https://i.ytimg.com/vi/FgAP5USUOOA/maxresdefault.jpg')">
                    <a href="https://www.youtube.com/watch?v=FgAP5USUOOA " class="popup-video play-video"><i
                            class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle"
            fill="none" stroke="currentColor">
            <circle r="20" cy="22" cx="22" id="translandcircle" />
        </symbol>
    </svg>
</section>

<!-- story -->
<section class="about-us-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 text-center text-lg-start">
                <div class="about-img">
                    <img src="assets/img/story/our-story01.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-7 mt-5 mt-lg-0 ps-lg-5">
                <div class="block-contents">
                    <div class="section-title">
                        <h5 class="textleft relative">Story</h5>
                        <span>@lang('messages.Pc_marine_name')</span>
                        <h2><span>@lang('messages.Story_Name')</span></h2>
                    </div>
                </div>
                <div class="about-info-contents">
                    <span style="text-align: justify; font-size: 15px">@lang('messages.Story_Head') </span>
                    <br>
                    <br>
                    <div class="header-right-element">
                        <a href="{{ route('services') }}" class="theme-btn"
                            style="float: right;">@lang('messages.Story_Read_More')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Service -->
<section class="our-service-solution fix theme-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mt-5 mt-lg-0 ps-lg-5">
                <div class="block-contents">
                    <div class="section-title">
                        <h5 class="textleft">Service</h5>
                        <span>@lang('messages.Pc_marine_name')</span>
                        <h2><span>@lang('messages.Services_Name')</span></h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-md-12 col-12">
            <div class="single-freight-service wow fadeInUp">
                <div class="service-content">
                    <div class="left">
                        <img src="assets/img/home/home_our_services-1.jpg">
                    </div>
                    <div class="container">
                        <h3 class="gradient-text2" style="font-size: 20px; text-align: center">
                            @lang('messages.Services_Head_01')</h3>
                        <ul style="font-size: 13px; text-align: justify">
                            <li>@lang('messages.Services_Detail_01')</li>
                            <li>@lang('messages.Services_Detail_02')</li>
                            <li>@lang('messages.Services_Detail_03')</li>
                            <br>
                            <p>&nbsp;&nbsp;&nbsp; @lang('messages.Services_Detail_04')</p>
                        </ul>

                        <br>
                        <div class="header-right-element">
                            <a href="{{ route('services') }}" class="theme-btn"
                                style="float: right;">@lang('messages.Story_Read_More')</a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-12 col-md-12 col-12">
            <div class="single-freight-service wow fadeInUp">
                <div class="service-content">
                    <div class="left">
                        <img src="assets/img/home/home_our_services-2.jpg">
                    </div>
                    <div class="container">
                        <h3 class="gradient-text2" style="font-size: 20px; text-align: center">
                            @lang('messages.Services_Head_02')</h3>
                        <ul style="font-size: 13px; text-align: justify">
                            <p>@lang('messages.Services_Detail_Head_02')</p>
                            <br>
                            <li>@lang('messages.Services_more_01')</li>
                            <li>@lang('messages.Services_more_02')</li>
                            <li>@lang('messages.Services_more_03')</li>
                        </ul>
                        <div class="header-right-element">
                            <a href="{{ route('services') }}" class="theme-btn"
                                style="float: right;">@lang('messages.Story_Read_More')</a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="brand-showcase-funfact-wrapper section-padding bg-contain bg-center"
    style="background-image: url('assets/img/dot_map.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mt-5 mt-lg-0 ps-lg-5">
                <div class="block-contents">
                    <div class="section-title">
                        <h5 class="textleft">Contact</h5>
                        <span>@lang('messages.Pc_marine_name')</span>
                        <h2><span>@lang('messages.Contact_Name')</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-contact-card card1">
                    <div class="top-part">
                        <div class="icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="title">
                            <h4>@lang('messages.Contact_email_name')</h4>
                        </div>
                    </div>
                    <div class="bottom-part">
                        <div class="info">
                            <p><a href="mailto:sales@pce-pcm.com"
                                    style="color: #797979;">@lang('messages.Contact_email')</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-contact-card card2">
                    <div class="top-part">
                        <div class="icon">
                            <i class="fal fa-phone"></i>
                        </div>
                        <div class="title">
                            <h4>@lang('messages.Contact_Head_tel_name')</h4>
                        </div>
                    </div>
                    <div class="bottom-part">
                        <div class="info">
                            <p><a href="tel:0849991749" style="color: #797979;">@lang('messages.footer_tel')</a></p>
                            <p><a href="tel:0822032318" style="color: #797979;">@lang('messages.footer_tel_02')</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-contact-card card3">
                    <div class="top-part">
                        <div class="icon">
                            <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="title">
                            <h4>@lang('messages.Contact_address_name')</h4>
                        </div>
                    </div>
                    <div class="bottom-part">
                        <div class="info">
                            <p>@lang('messages.Contact_address')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4639.974066995636!2d99.37687156768052!3d9.147020957583543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305408aff1d0af43%3A0xe1df03abec6e1a2e!2z4Lia4Lij4Li04Lip4Lix4LiXIOC5gOC4nuC4iuC4o-C4qOC4o-C4teC4p-C4tOC4iuC4seC4oiDguYDguK3guYfguJnguYDguJXguK3guKPguYzguYTguJ7guKPguKrguYwg4LiI4Liz4LiB4Lix4LiU!5e0!3m2!1sth!2sth!4v1699255599283!5m2!1sth!2sth"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

@stop
