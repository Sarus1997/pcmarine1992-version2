@extends('layouts.main')

@section('content')


<div class="page-banner-wrap text-center bg-cover"
    style="object-fit: cover; background-image: url('assets/img/slider/home-banner-02.jpg')">
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
                <li class="breadcrumb-item active">@lang('messages.Services_Head_01')</li>
            </ol>
        </nav>
    </div>
</div>

<section class="our-service-solution section-bg section-padding">
    <div class="container">
        <div class="col-lg-8 offset-lg-2 text-center col-12">
            <div class="section-title-2">
                <span>Our fleet</span>
                <h1>@lang('messages.Services_Head_01')</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4 col-md-6 col-12">
                <div class="single-freight-service wow fadeInUp">
                    <ul class="container" style="font-size: 14px; text-align: justify">
                        <li>@lang('messages.Services_Detail_01')</li>
                    </ul>
                    <div class="icon"><i class="flaticon-cargo-ship-3"></i></div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12">
                <div class="single-freight-service wow fadeInUp">
                    <ul class="container" style="font-size: 14px; text-align: justify">
                        <li>@lang('messages.Services_Detail_02')</li>
                        <br>
                    </ul>
                    <div class="icon"><i class="flaticon-cargo-ship-3"></i></div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12">
                <div class="single-freight-service wow fadeInUp">
                    <ul class="container" style="font-size: 14px; text-align: justify">
                        <li>@lang('messages.Services_Detail_03')</li>
                        <br>
                    </ul>
                    <div class="icon"><i class="flaticon-cargo-ship-3"></i></div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xl-12 col-md-12 col-12">
                <div class="single-freight-service wow fadeInUp">
                    <ul class="container" style="font-size: 14px; text-align: justify">
                        <li>@lang('messages.Services_Detail_04')</li>
                    </ul>
                    <div class="icon"><i class="flaticon-cargo-ship-3"></i></div>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="container">
    <hr style="background: linear-gradient(45deg, #abf1fa, #b0e4fb, #b5cefe); height: 1.5px;">
</div>

<section class="blog-wrapper theme-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="block-contents">
                <div class="section-title">
                    <h5 class="textleft">Our fleet</h5>
                    <span>@lang('messages.Pc_marine_name')</span>
                    <h2><span>@lang('messages.Services_Head_01')</span></h2>
                    <p style="color: antiquewhite; font-size: 12px">@lang('messages.click_img')</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="float: display: flex; justify-content: center; align-items: center;">
            <div class="slider owl-carousel">
                <div class="single-blog-item" onclick="showFullSize(this)">
                    <div class="single-team-member bg-cover" style="background-image: url('assets/img/slug/ktp-1.png')">
                        <div class="member-details">
                            <span>@lang('messages.fleet_name_KTP1')</span>
                            <h3 style="font-size: 15px">@lang('messages.fleet_name_1')</h3>
                        </div>
                    </div>
                </div>


                <div class="single-blog-item" onclick="showFullSize(this)">
                    <div class="single-team-member bg-cover" style="background-image: url('assets/img/slug/ktp-2.png')">
                        <div class="member-details">
                            <span>@lang('messages.fleet_name_KTP2')</span>
                            <h3 style="font-size: 15px">@lang('messages.fleet_name_2')</h3>
                        </div>
                    </div>
                </div>

                <div class="single-blog-item" onclick="showFullSize(this)">
                    <div class="single-team-member bg-cover" style="background-image: url('assets/img/slug/ktp-3.png')">
                        <div class="member-details">
                            <span>@lang('messages.fleet_name_KTP3')</span>
                            <h3 style="font-size: 15px">@lang('messages.fleet_name_3')</h3>
                        </div>
                    </div>
                </div>

                <div class="single-blog-item" onclick="showFullSize(this)">
                    <div class="single-team-member bg-cover" style="background-image: url('assets/img/slug/ktp-4.png')">
                        <div class="member-details">
                            <span>@lang('messages.fleet_name_KTP4')</span>
                            <h3 style="font-size: 15px">@lang('messages.fleet_name_4')</h3>
                        </div>
                    </div>
                </div>

                <div class="single-blog-item" onclick="showFullSize(this)">
                    <div class="single-team-member bg-cover" style="background-image: url('assets/img/slug/inter-marine.png')">
                        <div class="member-details">
                            <span>@lang('messages.fleet_name_MT1')</span>
                            <h3 style="font-size: 15px">@lang('messages.fleet_name_5')</h3>
                        </div>
                    </div>
                </div>

                <div class="single-blog-item" onclick="showFullSize(this)">
                    <div class="single-team-member bg-cover" style="background-image: url('assets/img/slug/kittiphon.png')">
                        <div class="member-details">
                            <span>@lang('messages.fleet_name_MT2')</span>
                            <h3 style="font-size: 15px">@lang('messages.fleet_name_6')</h3>
                        </div>
                    </div>
                </div>

                <div class="single-blog-item" onclick="showFullSize(this)">
                    <div class="single-team-member bg-cover" style="background-image: url('assets/img/slug/ocean-marine.png')">
                        <div class="member-details">
                            <span>@lang('messages.fleet_name_MT3')</span>
                            <h3 style="font-size: 15px">@lang('messages.fleet_name_7')</h3>
                        </div>
                    </div>
                </div>

                <div class="single-blog-item" onclick="showFullSize(this)">
                    <div class="single-team-member bg-cover" style="background-image: url('assets/img/slug/pc-natthaphon.png')">
                        <div class="member-details">
                            <span>@lang('messages.fleet_name_MT4')</span>
                            <h3 style="font-size: 15px">@lang('messages.fleet_name_8')</h3>
                        </div>
                    </div>
                </div>

                <div class="single-blog-item" onclick="showFullSize(this)">
                    <div class="single-team-member bg-cover" style="background-image: url('assets/img/slug/srivichai-1.png')">
                        <div class="member-details">
                            <span>@lang('messages.fleet_name_SR1')</span>
                            <h3 style="font-size: 15px">@lang('messages.fleet_name_9')</h3>
                        </div>
                    </div>
                </div>

                <div class="single-blog-item" onclick="showFullSize(this)">
                    <div class="single-team-member bg-cover" style="background-image: url('assets/img/slug/srivichai-2.png')">
                        <div class="member-details">
                            <span>@lang('messages.fleet_name_SR2')</span>
                            <h3 style="font-size: 15px">@lang('messages.fleet_name_10')</h3>
                        </div>
                    </div>
                </div>

                <div class="single-blog-item" onclick="showFullSize(this)">
                    <div class="single-team-member bg-cover" style="background-image: url('assets/img/slug/blueline.jpg')">
                        <div class="member-details">
                            {{-- <span>@lang('messages.')</span> --}}
                            <h3 style="font-size: 15px">blueline 1</h3>
                        </div>
                    </div>
                </div>

                <div class="single-blog-item" onclick="showFullSize(this)">
                    <div class="single-team-member bg-cover" style="background-image: url('assets/img/slug/DJI_0002-1.jpg')">
                        <div class="member-details">
                            {{-- <span>@lang('messages.')</span> --}}
                            <h3 style="font-size: 15px">DJI_0002-1</h3>
                        </div>
                    </div>
                </div>

                <div class="single-blog-item" onclick="showFullSize(this)">
                    <div class="single-team-member bg-cover" style="background-image: url('assets/img/slug/Pc-kittiphon.jpg')">
                        <div class="member-details">
                            {{-- <span>@lang('messages.')</span> --}}
                            <h3 style="font-size: 15px">Pc-kittiphon</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<script>
    $(".slider").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        nav: true, // Show navigation
        navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'>&nbsp;</i>"],
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            720: {
                items: 3
            }
        }
    });

    function showFullSize(img) {
        var imageUrl = img.querySelector('.single-team-member').style.backgroundImage;
        imageUrl = imageUrl.replace('url("', '').replace('")', '');

        // Use SweetAlert2 to display the full-size img
        Swal.fire({
            imageUrl: imageUrl,
            imageAlt: 'Full-size Image',
            showCloseButton: true,
            showConfirmButton: false
        });
    }

</script>

<style>
    .fal {
        font-size: 14px;
        color: #999;
        margin-bottom: 15px;
    }

    .text {
        font-size: 14px;
        color: #999;
        margin-bottom: 10px;
    }

    .content {
        background-color: #F5F5F7;
        padding: 10px;
    }

    .single-blog-item {
        padding: 10px;
        /* เพิ่ม padding 10px ให้กับ single-blog-item */
    }

    .member-details span {
        font-size: 10px
    }
</style>


@stop
