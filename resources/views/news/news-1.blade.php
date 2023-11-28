@extends('layouts.main')

@section('content')


<div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/slider/home-banner-04.jpg')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>@lang('messages.News_Name')</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('messages.Manu_Home')</a></li>
                <li class="breadcrumb-item active" aria-current="page">@lang('messages.News_Name')</li>
            </ol>
        </nav>
    </div>
</div>

<section class="blog-wrapper news-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 mb-40">
                <div class="block-contents text-center">
                    <div class="section-title">
                        <h5>News</h5>
                        <span>@lang('messages.Pc_marine_name')</span>
                        <h2><span>@lang('messages.News_Name')</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper" style="background-color: #ECECEC">
        <div class="top">
            <div class="container">
                <div class="title">
                    {{-- <h1 style="text-align: center">@lang('messages.News_Name')</h1> --}}
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container">
                <div class="card first">
                    <img src="assets/img/news/pce-new-01.webp" width="100%">
                    <h2 style="color: #2D4981">@lang('messages.News_Head_01')</h2>
                    <p class="date">@lang('messages.News_Date_01')</p>
                    <hr>
                    <p class="text" style="text-align: justify">@lang('messages.News_Detail_01')</p>
                </div>
            </div>
        </div>
    </div>
</section>



@stop
