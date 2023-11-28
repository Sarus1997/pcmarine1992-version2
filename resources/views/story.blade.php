@extends('layouts.main')

@section('content')

<div class="page-banner-wrap text-center bg-cover"
    style="object-fit: cover; background-image: url('assets/img/slider/home-banner-03.jpg')" style="object-fit: cover;">
    <div class="container">
        <div class="page-heading text-white">
            <h1>@lang('messages.Manu_Story')</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('messages.Manu_Home')</a></li>
                <li class="breadcrumb-item active" aria-current="page">@lang('messages.Manu_Story')</li>
            </ol>
        </nav>
    </div>
</div>

<section class="about-us-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 text-center text-lg-start">
                <div class="about-img">
                    <img src="assets/img/story/Story_our_page.webp" alt="">
                </div>
            </div>
            <div class="col-lg-7 mt-5 mt-lg-0 ps-lg-5">
                <div class="block-contents">
                    <div class="section-title">
                        <h5 class="textleft relative">Story</h5>
                        <span>@lang('messages.Pc_marine_name')</span>
                        <h2 style="font-size: 40px" class="gradient-text2">@lang('messages.Story_page_01')</h2>
                    </div>
                </div>
                <div class="about-info-contents">
                    <p style="text-align: justify">@lang('messages.Story_page_02')</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="why-chose-us section-padding fix theme-bg ">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 mb-40">
                <div class="block-contents text-center">
                    <div class="section-title">
                        <h5>Story</h5>
                        <span>@lang('messages.Pc_marine_name')</span>
                        <h2>
                            <span>@lang('messages.Manu_Story')</span>
                        </h2>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="timeline">
            <ul>
                <li>
                    {{-- 2546 --}}
                    <span>@lang('messages.Story_2546_Head')</span>
                    <div class="container">
                        <strong>@lang('messages.Story_2546')</strong>
                        <p> @lang('messages.Story_2546_2')</p>
                        <br>
                        <strong>@lang('messages.Story_2546_3')</strong>
                        <p> @lang('messages.Story_2546_4')</p>
                        <p> @lang('messages.Story_2546_5')</p>
                    </div>
                </li>

                <li>
                    {{-- 2551 --}}
                    <span>@lang('messages.Story_2551_Head')</span>
                    <div class="container">
                        <strong>@lang('messages.Story_2551')</strong>
                        <p>@lang('messages.Story_2551_2')</p>
                    </div>
                </li>

                <li>
                    {{-- 2553 --}}
                    <span>@lang('messages.Story_2553_Head')</span>
                    <div class="container">
                        <strong>@lang('messages.Story_2553')</strong>
                        <p> @lang('messages.Story_2553_2')</p>
                        <p> @lang('messages.Story_2553_3')</p>
                    </div>
                </li>

                <li>
                    {{-- 2555 --}}
                    <span>@lang('messages.Story_2555_Head')</span>
                    <div class="container">
                        <strong>@lang('messages.Story_2555')</strong>
                        <p> @lang('messages.Story_2555_2')</p>
                    </div>
                </li>

                <li>
                    {{-- 2556 --}}
                    <span>@lang('messages.Story_2556_Head')</span>
                    <div class="container">
                        <strong>@lang('messages.Story_2556')</strong>
                        <p> @lang('messages.Story_2556_2')</p>
                    </div>
                </li>

                <li>
                    {{-- 2558 --}}
                    <span>@lang('messages.Story_2558_Head')</span>
                    <div class="container">
                        <strong>@lang('messages.Story_2558')</strong>
                        <p>@lang('messages.Story_2558_2')</p>
                        <br>
                        <strong>@lang('messages.Story_2558_3')</strong>
                        <p>@lang('messages.Story_2558_4')</p>
                    </div>
                </li>

                <li>
                    {{-- 2559 --}}
                    <span>@lang('messages.Story_2559_Head')</span>
                    <div class="container">
                        <strong>@lang('messages.Story_2559')</strong>
                        <p>
                            @lang('messages.Story_2559_2')
                        </p>
                    </div>
                </li>

                <li>
                    {{-- 2561 --}}
                    <span>@lang('messages.Story_2561_Head')</span>
                    <div class="container">
                        <strong>@lang('messages.Story_2561')</strong>
                        <p>
                            @lang('messages.Story_2561_2')
                        </p>
                    </div>
                </li>

                <li>
                    {{-- 2562 --}}
                    <span>@lang('messages.Story_2562_Head')</span>
                    <div class="container">
                        <strong>@lang('messages.Story_2562')</strong>
                        <p>
                            @lang('messages.Story_2562_2')
                        </p>
                    </div>
                </li>

                <li>
                    {{-- 2564 --}}
                    <span>@lang('messages.Story_2564_Head')</span>
                    <div class="container">
                        <strong>@lang('messages.Story_2564')</strong>
                        <p>
                            @lang('messages.Story_2564_2')
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

@stop
