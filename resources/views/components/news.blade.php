<div class="container">
    <hr style="background: linear-gradient(45deg, #abf1fa, #b0e4fb, #b5cefe); height: 1.5px;">
</div>

<section class="blog-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="block-contents">
                <div class="section-title">
                    <h5 class="textleft">News</h5>
                    <span>@lang('messages.Pc_marine_name')</span>
                    <h2><span>@lang('messages.News_Name')</span></h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="float: display: flex; justify-content: center; align-items: center;">
            <div class="slider owl-carousel">
                <div class="single-blog-item">
                    <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/news/pce-new-01.webp')">
                        {{-- <div class="post-cat">
                            <a href="news.html">transport</a>
                        </div> --}}
                    </div>
                    <div class="content">
                        <div class="post-meta d-flex align-items-center">
                            <div class="post-date">
                                <i class="fal fa-calendar-alt"></i>@lang('messages.News_Date_01')
                            </div>
                        </div>
                        <h3 style="font-size: 15px"><a href="{{ route('news-1') }}">@lang('messages.News_Head_01')</a></h3>
                        <br>
                    </div>
                </div>

                <div class="single-blog-item">
                    <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/news/pce-new-02.webp')">
                        {{-- <div class="post-cat">
                            <a href="news.html">transport</a>
                        </div> --}}
                    </div>
                    <div class="content">
                        <div class="post-meta d-flex align-items-center">
                            <div class="post-date">
                                <i class="fal fa-calendar-alt"></i>@lang('messages.News_Date_02')
                            </div>
                        </div>
                        <h3 style="font-size: 15px"><a href="{{ route('news-2') }}">@lang('messages.News_Head_02')</a></h3>
                    </div>
                </div>

                <div class="single-blog-item">
                    <div class="post-featured-thumb bg-cover" style="background-image: url('assets/img/news/pce-new-05.jpeg')">
                        {{-- <div class="post-cat">
                            <a href="news.html">transport</a>
                        </div> --}}
                    </div>
                    <div class="content">
                        <div class="post-meta d-flex align-items-center">
                            <div class="post-date">
                                <i class="fal fa-calendar-alt"></i>@lang('messages.News_Date_03')
                            </div>
                        </div>
                        <h3 style="font-size: 15px"><a href="{{ route('news-3') }}">@lang('messages.News_Head_03')</a></h3>
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
</script>

<style>
    .fal {
        font-size: 14px;
        color: #999;
        margin-bottom: 10px;
    }

    .text {
        font-size: 14px;
        color: #999;
        margin-bottom: 10px;
    }

    .content {
        background-color: #F5F5F7;
        padding: 20px;
    }

    .single-blog-item {
        padding: 10px; /* เพิ่ม padding 10px ให้กับ single-blog-item */
    }

</style>
