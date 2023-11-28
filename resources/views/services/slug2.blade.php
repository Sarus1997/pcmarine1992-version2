@extends('layouts.main')

@section('content')


<div class="page-banner-wrap text-center bg-cover" style="object-fit: cover; background-image: url('assets/img/slider/home-banner-02.jpg')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>@lang('messages.Services_page_01')</h1>
            <br>
            <hr>
            <P style="color: #fff; font-size: 14px">@lang('messages.Services_Title')</P>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route ('home')}}">@lang('messages.Manu_Home')</a></li>
                <li class="breadcrumb-item"><a href="{{route ('services')}}">@lang('messages.Services_Name')</a></li>
                <li class="breadcrumb-item active">@lang('messages.Services_Head_02')</li>
            </ol>
        </nav>
    </div>
</div>


<section class="about-us-wrapper  section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="about-img-gallery me-lg-5 mb-5 mb-lg-0">
                    <div class="about-img-left">
                        <img src="assets/img/slug/DJI_0004-2.jpg" width="100%" height="100%" style="object-fit: cover;">
                    </div>
                    <div class="about-img-center bg-cover" style="background-image: url('assets/img/slug/DJI_0002-1.jpg')">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="section-title-2">
                    <span>Services</span>
                    <h2>@lang('messages.Services_Head_02')</h2>
                </div>
                <p style="text-align: justify">@lang('messages.Services_Detail_Head_02')</p>
                <div class="row">
                    <div class="col-12 col-md-12 col-sm-12">
                        <br>
                        <ul class=" wow fadeInUp" style="font-size: 15px;">
                            <li>@lang('messages.Services_more_01')</li>
                            <li>@lang('messages.Services_more_02')</li>
                            <li>@lang('messages.Services_more_03')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





@stop
