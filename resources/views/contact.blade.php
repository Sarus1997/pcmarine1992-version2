@extends('layouts.main')

@section('content')


<div class="page-banner-wrap text-center bg-cover"
    style="object-fit: cover; background-image: url('assets/img/slider/home-banner-04.jpg')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>@lang('messages.Contact_Name')</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('messages.Manu_Home')</a></li>
                <li class="breadcrumb-item active" aria-current="page">@lang('messages.Contact_Name')</li>
            </ol>
        </nav>
    </div>
</div>

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
                            <h4>@lang('messages.Contact_Head_email_name')</h4>
                        </div>
                    </div>
                    <div class="bottom-part">
                        <div class="info">
                            <p><a href="mailto:sales@pce-pcm.com"
                                    style="color: #797979;">@lang('messages.Contact_Head_email')</a></p>
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
                            <p><a href="tel:0849991749" style="color: #797979;">@lang('messages.Contact_Head_tel')</a></p>
                            <p><a href="tel:0822032318" style="color: #797979;">@lang('messages.Contact_Head_tel_02')</a></p>
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
                            <h4>@lang('messages.Contact_Head_address')</h4>
                        </div>
                    </div>
                    <div class="bottom-part">
                        <div class="info">
                            <p>@lang('messages.Contact_Head_address_01')</p>
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

<section class="brand-showcase-funfact-wrapper section-padding bg-contain bg-cente theme-bg">
    <div class="container">
        <div class="row pt-5">
            <div class="block-contents mb-30 pt-60">
                <div class="section-title text-center">
                    <h5 class="text-center">From</h5>
                    <span>@lang('messages.Pc_marine_name')</span>
                    <h2><span>@lang('messages.Contact_From')</span></h2>
                </div>
            </div>

            <div class="col-12 col-lg-12">
                <div class="contact-form">
                    <form action="#"  id="contact-form">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="fname"><p style="color: azure; font-size:20px;">@lang('messages.Contact_Name_first')</p></label>
                                    <input type="text" id="fname" name="fname" placeholder="@lang('messages.Contact_Name_first')" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="fname"><p style="color: azure; font-size:20px;">@lang('messages.Contact_Name_last')</p></label>
                                    <input type="text" id="lname" name="lname" placeholder="@lang('messages.Contact_Name_last')" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="email"><p style="color: azure; font-size:20px;">@lang('messages.Contact_Email_')</p></label>
                                    <input type="email" id="email" name="email" placeholder="@lang('messages.Contact_Email_')" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="phone"><p style="color: azure; font-size:20px;">@lang('messages.Contact_Tel_')</p></label>
                                    <input type="tel" id="phone" name="phone" placeholder="@lang('messages.Contact_Tel_')" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="single-personal-info">
                                    <label for="subject"><p style="color: azure; font-size:20px;">@lang('messages.Contact_Subject')</p></label>
                                    <input type="text" id="subject" name="subject" placeholder="@lang('messages.Contact_Subject')">
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="single-personal-info">
                                    <label for="message"><p style="color: azure; font-size:20px;">@lang('messages.Contact_Message')</p></label>
                                    <textarea id="message" name="message" placeholder="@lang('messages.Contact_Message')"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-12 text-center">
                                <button class="btn btn-info" type="submit" value="Get A Quote" style="font-size: 20px; padding: 15px 30px; width: 200px;">
                                    <span>@lang('messages.Contact_Send')</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    .btn-outline-primary {
        size: 20px;
    }
</style>

@stop
