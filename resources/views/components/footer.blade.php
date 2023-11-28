<footer class="footer-1 footer-wrap">
    <div class="footer-widgets-wrapper theme-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="about-transland pe-md-5 pe-xl-0">
                        <a href="{{ route('home') }}">
                            <img src="assets/img/logo/pc-marine-logo-white.svg"  alt="Pcmarine1992">
                            <span style="font-size: 16px; margin: 5px; color: #4AB9CF;"><b>@lang('messages.Pc_marine_name')</b></span>
                            </a>
                        <p>@lang('messages.Hero_Detail')</p>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-2">
                    <div class="single-footer-wid ps-xl-4">
                        <div class="wid-title">
                            <h6>@lang('messages.Manu')</h6>
                        </div>
                            <ul>
                                <li><a  href="#home">@lang('messages.Manu_Home')</a></li>
                                <li><a  href="{{ route('story') }}">@lang('messages.Manu_Story')</a> </li>
                                <li><a  href="{{ route('services') }}">@lang('messages.Manu_Services')</a></li>
                                <li><a  href="{{ route('contact') }}">@lang('messages.Manu_Contact_Us')</a></li>
                            </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="single-footer-wid ps-xl-2">
                        <div class="wid-title">
                            <h6>@lang('messages.Contact_address_name')</h6>
                        </div>
                        <div class="get-in-touch">
                            <div class="single-contact-info">
                                <div class="icon id1">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-info">
                                    <span>@lang('messages.Contact_address')</span>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="icon id2">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="contact-info">
                                    <p><a href="tel:0849991749" style="color: #9DACB8;">@lang('messages.footer_tel')</a></p>
                                    <p><a href="tel:0822032318" style="color: #9DACB8;">@lang('messages.footer_tel_02')</a></p>

                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="icon id3">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="contact-info">
                                    <p><a href="mailto:sales@pce-pcm.com" style="color: #9DACB8;">@lang('messages.Contact_email')</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-4">
                    <div class="single-footer-wid">
                        <div class="wid-title">
                            <h6>@lang('messages.Pce_Map')</h6>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2418.3379818674607!2d99.37631607055667!3d9.145839248010672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305408aff1d0af43%3A0xe1df03abec6e1a2e!2z4Lia4Lij4Li04Lip4Lix4LiXIOC5gOC4nuC4iuC4o-C4qOC4o-C4teC4p-C4tOC4iuC4seC4oiDguYDguK3guYfguJnguYDguJXguK3guKPguYzguYTguJ7guKPguKrguYwg4LiI4Liz4LiB4Lix4LiU!5e1!3m2!1sth!2sth!4v1699538789885!5m2!1sth!2sth"
                        width="100%"
                        height="250"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container align-items-center">
            <div class="bottom-content-wrapper">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="copy-rights">
                            <p>@lang('messages.footer_copy')</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-2 mt-md-0 col-12 text-md-end">
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
