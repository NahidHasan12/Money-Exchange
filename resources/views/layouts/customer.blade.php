<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}- @yield('title')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('customer') }}/styles/bootstrap4/bootstrap.min.css">
    <link href="{{ asset('customer') }}/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('customer') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('customer') }}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('customer') }}/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('customer') }}/plugins/slick-1.8.0/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('customer') }}/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('customer') }}/styles/responsive.css">

    {{-- summernote link --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    {{-- drofify link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    @yield('web_style')

    @yield('main_nav_css_link')

    </head>


    <div class="super_container">

        

        @yield('content')

        <!-- Footer -->

        <footer class="footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 footer_col">
                        <div class="footer_column footer_contact">
                            <div class="logo_container">
                                <div class="logo"><a href="#">OneTech</a></div>
                            </div>
                            <div class="footer_title">Got Question? Call Us 24/7</div>
                            <div class="footer_phone">+38 068 005 3570</div>
                            <div class="footer_contact_text">
                                <p>17 Princess Road, London</p>
                                <p>Grester London NW18JR, UK</p>
                            </div>
                            <div class="footer_social">
                                <ul>
                                    <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="" target="_blank"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-2">
                        <div class="footer_column">
                            <div class="footer_title">Customer Care</div>
                            <ul class="footer_list">
                                <li><a href="{{ route('customer.profile') }}">My Account</a></li>
                                <li><a href="">Order Tracking</a></li>
                                <li><a href="#">Wish List</a></li>
                                <li><a href="#">Our Blog</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Become a vendeo</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <!-- Copyright -->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                            <div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    </div>
                            <div class="logos ml-sm-auto">
                                <ul class="logos_list">
                                    <li><a href="#"><img src="{{ asset('frontend') }}/images/logos_1.png" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('frontend') }}/images/logos_2.png" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('frontend') }}/images/logos_3.png" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('frontend') }}/images/logos_4.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('customer') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('customer') }}/styles/bootstrap4/popper.js"></script>
    <script src="{{ asset('customer') }}/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="{{ asset('customer') }}/plugins/greensock/TweenMax.min.js"></script>
    <script src="{{ asset('customer') }}/plugins/greensock/TimelineMax.min.js"></script>
    <script src="{{ asset('customer') }}/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="{{ asset('customer') }}/plugins/greensock/animation.gsap.min.js"></script>
    <script src="{{ asset('customer') }}/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="{{ asset('customer') }}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="{{ asset('customer') }}/plugins/slick-1.8.0/slick.js"></script>
    <script src="{{ asset('customer') }}/plugins/easing/easing.js"></script>
    <script src="{{ asset('customer') }}/js/custom.js"></script>

    {{-- Dropify link --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- summer note js link --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>



    @yield('main_nav_js_link')

    @stack('web_script')


    </body>

    </html>
