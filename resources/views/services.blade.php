@extends('layouts.main')

@section('content')


<div class="page-banner-wrap text-center bg-cover"
    style="object-fit: cover; background-image: url('assets/img/slider/home-banner-02.jpg')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>@lang('messages.Services_page_01')</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route ('home')}}">@lang('messages.Manu_Home')</a></li>
                <li class="breadcrumb-item active">@lang('messages.Services_Name')</li>
            </ol>
        </nav>
    </div>
</div>


<section class="our-service-solution theme-bg section-padding">
    <div class="container">
        <div class="col-lg-8 offset-lg-2 text-center col-12">
            <div class="section-title-2">
                <span>Services Our</span>
                <h1 style="color: #4AB9CF;">@lang('messages.Services_Name')</h1>
                <hr>
                <br>
                <P style="color: #fff; font-size: 14px">@lang('messages.Services_Title')</P>
            </div>
        </div>

        <div class="col-xl-12 col-md-12 col-12">
            <div class="single-freight-service wow fadeInUp">
                <div class="service-content">
                    <div class="left">
                        <img src="assets/img/home/home_our_services-1.jpg">
                    </div>
                    <div class="container" style="background-color: #F7F7F7"><br>
                        <h3 class="gradient-text2" style="font-size: 20px; text-align: center">@lang('messages.Services_Head_01')</h3>
                        <ul style="font-size: 13px; text-align: justify">
                            <li>@lang('messages.Services_Detail_01')</li>
                            <li>@lang('messages.Services_Detail_02')</li>
                            <li>@lang('messages.Services_Detail_03')</li>
                            <br>
                            <p>&nbsp;&nbsp;&nbsp; @lang('messages.Services_Detail_04')</p>
                        </ul>

                        <br>
                        <div class="header-right-element">
                            <a href="{{ route('slug1') }}" class="theme-btn"
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
                    <div class="container" style="background-color: #F7F7F7"><br>
                        <h3 class="gradient-text2" style="font-size: 20px; text-align: center">@lang('messages.Services_Head_02')</h3>
                        <ul style="font-size: 13px; text-align: justify">
                            <p>@lang('messages.Services_Detail_Head_02')</p>
                            <br>
                            <li>@lang('messages.Services_more_01')</li>
                            <li>@lang('messages.Services_more_02')</li>
                            <li>@lang('messages.Services_more_03')</li>
                        </ul>
                        <div class="header-right-element">
                            <a href="{{ route('slug2') }}" class="theme-btn"
                                style="float: right;">@lang('messages.Story_Read_More')</a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="about-us-wrapper  section-padding">
    <div class="container">
        <div class="block-contents">
            <div class="section-title">
                <h5 class="textleft relative">Services</h5>
                <span>@lang('messages.Pc_marine_name')</span>
                <h2 style="font-size: 30px"><span>@lang('messages.Product_Name')</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 text-center text-lg-start">
                <div class="about-img">
                    <img src="assets/img/slug/DJI_0006.png" alt="">
                </div>
            </div>
            <div class="col-lg-7 mt-5 mt-lg-0 ps-lg-5">
                <div class="about-info-contents" style="text-align: justify; font-size: 13px">
                    <p>
                        <span>
                            @lang('messages.Product_Detail_01')<br>
                        </span>
                    </p>
                    <p>
                        <span>
                            @lang('messages.Product_Detail_02')<br>

                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-wrapper section-padding style-2 bg-cover" style="background-position: center center; background-image: url('assets/img/slug/DJI_0002-1.jpg')">
    <div class="container">
        <div class="col-lg-8 offset-lg-2 col-12 text-center">
            <div class="cta-contents">
                <img src="assets/img/logo/pc-marine-logo-white.svg" style="width: 100px">
                <h2 class="text-white mt-4 mt-md-5 mb-4">@lang('messages.Pc_marine_name')</h2>
                <p class="text-white">@lang('messages.Hero_Detail')</p>

            </div>
        </div>
    </div>
</section>

@stop

