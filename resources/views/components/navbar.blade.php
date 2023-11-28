<style>
    @media (max-width: 1001px) {
    .logo-nav {
        display: none;
        }
    }

</style>

<div class="top-bar-wrapper d-none d-sm-block">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="top-left">
            <a href="tel:084-999-1749"><i class="fal fa-phone-volume"></i>@lang('messages.Contact_tel')</a><a href="tel:084-999-1749">@lang('messages.Contact_tel_02')</a>
            <a href="mailto:sales@pce-pcm.com"><i class="fal fa-envelope"></i>@lang('messages.Contact_email')</a>
        </div>
        <div class="top-right d-none d-md-block">
            <select class="form-control changeLang">
                <option value="th" {{ session()->get('locale') == 'th' ? 'selected' : '' }}>
                    <span class="flag-icon flag-icon-th"></span> @lang('messages.Thai')
                </option>
                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>
                    <span class="flag-icon flag-icon-us"></span> @lang('messages.English')
                </option>
            </select>
        </div>
    </div>
</div>

<header class="header-1">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-4 col-sm-4 col-md-4 col-6 pr-lg-6">
                <div class="logo">
                    <a href="{{ route('home') }}">
                    <img src="assets/img/logo/pc-marine-logo.svg"  alt="Pcmarine1992">
                    <span class="gradient-text1 logo-nav" style="font-size: 16px; margin: 5px;"><b>@lang('messages.Pc_marine_name')</b></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-end p-lg-0 d-none d-lg-flex justify-content-between align-items-center">
                <div class="menu-wrap">
                    <div class="main-menu">
                        <ul>
                            <li><a style="color: #67C1CE;" href="{{ route('home') }}">@lang('messages.Manu_Home')</a></li>
                            <li><a style="color: #5590B2;" href="{{ route('story') }}">@lang('messages.Manu_Story')</a> </li>
                            <li><a style="color: #4B5491;" href="{{ route('services') }}">@lang('messages.Manu_Services')</a></li>
                            <li><a style="color: #330E6A;" href="{{ route('contact') }}">@lang('messages.Manu_Contact_Us')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="d-block d-lg-none col-sm-1 col-md-8 col-6">
                <div class="mobile-nav-wrap">
                    <div id="hamburger"><i class="fal fa-bars"></i></div>
                    <!-- mobile menu - responsive menu  -->
                    <div class="mobile-nav">
                        <button type="button" class="close-nav">
                            <i class="fal fa-times-circle"></i>
                        </button>
                        <nav class="sidebar-nav">
                            <div class="">
                                <select class="form-control changeLang">
                                    <option value="th" {{ session()->get('locale') == 'th' ? 'selected' : '' }}>@lang('messages.Thai') </option>
                                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>@lang('messages.English') </option>
                                </select>
                            </div>

                            <br>
                            <ul class="metismenu" id="mobile-menu">
                                <li><a href="{{ route('home') }}">@lang('messages.Manu_Home')</a></li>
                                <li><a href="{{ route('story') }}">@lang('messages.Manu_Story')</a> </li>
                                <li><a href="{{ route('services') }}">@lang('messages.Manu_Services')</a></li>
                                <li><a href="{{ route('contact') }}">@lang('messages.Manu_Contact_Us')</a></li>
                            </ul>
                        </nav>

                        {{-- <br>
                        <div class="action-bar text-white">
                            <div class="single-info-element">
                                <div class="icon">
                                    <i class="fal fa-map-marked-alt"></i>
                                </div>
                                <div class="text">
                                    <h5>visit our location:</h5>
                                    <span>West Jakarta City, UK</span>
                                </div>
                            </div>
                            <div class="single-info-element">
                                <div class="icon">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="text">
                                    <h5>Opening Hours:</h5>
                                    <span>Mon-Fri 8am-5pm</span>
                                </div>
                            </div>
                            <div class="single-info-element">
                                <div class="icon">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="text">
                                    <h5>Send us mail</h5>
                                    <span>info@example.com</span>
                                </div>
                            </div>
                            <div class="call-us">
                                <div class="icon text-white">
                                    <i class="fal fa-phone-volume"></i>
                                </div>
                                <div class="text">
                                    <h5>Troll fre number</h5>
                                    <span>+09 949 858327</span>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
        </div>
    </div>
</header>
