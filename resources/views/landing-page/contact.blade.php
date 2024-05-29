<!doctype html>
<html lang="zxx">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{ asset('default') }}/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('default') }}/assets/css/animate.min.css">
        <link rel="stylesheet" href="{{ asset('default') }}/assets/css/meanmenu.css">
        <link rel="stylesheet" href="{{ asset('default') }}/assets/css/boxicons.min.css">
        <link rel="stylesheet" href="{{ asset('default') }}/assets/css/flaticon.css">
        <link rel="stylesheet" href="{{ asset('default') }}/assets/css/odometer.min.css">
        <link rel="stylesheet" href="{{ asset('default') }}/assets/css/nice-select.min.css">
        <link rel="stylesheet" href="{{ asset('default') }}/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{ asset('default') }}/assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="{{ asset('default') }}/assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="{{ asset('default') }}/assets/css/fancybox.min.css">
        <link rel="stylesheet" href="{{ asset('default') }}/assets/css/style.css">
        <link rel="stylesheet" href="{{ asset('default') }}/assets/css/dark.css">
		<link rel="stylesheet" href="{{ asset('default') }}/assets/css/responsive.css">

		<title>{{ config('app.name') }}</title>

        <link rel="icon" type="image/png" href="{{ asset('admin/demo/app/assets/images/logo/favicon.png') }}">
    </head>

    <body>

        <!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="javascript:void(0);">
                                <img src="{{ asset('admin/demo/app/assets/images/logo/logo-dark.png') }}" class="black-logo" alt="image" width="100">
                                <img src="{{ asset('admin/demo/app/assets/images/logo/logo-white.png') }}" class="white-logo" alt="image" width="100">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="javascript:void(0);">
                            <img src="{{ asset('admin/demo/app/assets/images/logo/logo-dark.png') }}" class="black-logo" alt="image" width="100">
                            <img src="{{ asset('admin/demo/app/assets/images/logo/logo-white.png') }}" class="white-logo" alt="image" width="100">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">

                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{ route('landing-page') }}" class="nav-link">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('landing-page.about') }}" class="nav-link">Tentang</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('landing-page.contact') }}" class="nav-link active">Kontak</a>
                                </li>
                            </ul>

                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <div class="user-box">
                                        <a href="{{ route('login') }}"><i class='bx bxs-user'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="listing.html" class="default-btn">ADD LISTING + <span></span></a>
                                </div>

                                <div class="option-item">
                                    <div class="user-box">
                                        <a href="login.html"><i class='bx bxs-user'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Start Page Banner Area -->
        <div class="page-banner-area">
            <div class="container">
                <div class="page-banner-content wow animate__animated animate__fadeInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">
                    <h2>Kontak</h2>

                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Halaman</li>
                        <li>Kontak</li>
                    </ul>
                </div>
            </div>

            <div class="page-banner-image wow animate__animated animate__fadeInRightight" data-wow-delay="300ms" data-wow-duration="2000ms">
                <img src="{{ asset('default') }}/assets/images/page-banner.png" alt="image">
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start Contact Area -->
        <div class="contact-area ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="contact-form">
                            <div class="title">
                                <h3>Beri kami saran</h3>
                            </div>

                            <form id="contactForm">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>No. Handphone</label>
                                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Pesan</label>
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn">Kirim Pesan <span></span></button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="contact-address">
                            <h3>Alamat Kontak:</h3>

                            <ul class="address-info">
                                <li>
                                    <i class='bx bxs-map'></i>
                                    Fakultas Ilmu Komputer, Universitas Muslim Indonesia
                                </li>

                                <li>
                                    <i class='bx bxs-phone'></i>
                                    <a href="tel:000123456789">+62 823-9943-1723</a>
                                </li>

                                <li>
                                    <i class='bx bx-envelope'></i>
                                    <a href="javascript:void(0);"><span class="__cf_email__" data-cfemail="dbb3beb7b7b49bbdb2bfb4f5b8b4b6">[email&#160;protected]</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Area -->>

        <!-- Start Footer Area -->
        <footer class="footer-area pt-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-footer-widget">
                            <div class="widget-logo">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('admin/demo/app/assets/images/logo/logo-white.png') }}" alt="image" width="200px">
                                </a>
                            </div>

                            <p>Aplikasi penentuan kost terbaik menggunakan metode AHP dan Borda</p>

                            <ul class="widget-social">
                                <li>
                                    <a href="/" target="_blank"><i class='bx bxl-facebook'></i></a>
                                </li>
                                <li>
                                    <a href="/" target="_blank"><i class='bx bxl-twitter'></i></a>
                                </li>
                                <li>
                                    <a href="/" target="_blank"><i class='bx bxl-instagram'></i></a>
                                </li>
                                <li>
                                    <a href="/" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-footer-widget">
                            <h3>Contact</h3>

                            <ul class="widget-info">
                                <li>
                                    <i class='bx bxs-map'></i>
                                    Fakultas Ilmu Komputer, Universitas Muslim Indonesia
                                </li>

                                <li>
                                    <i class='bx bxs-phone'></i>
                                    <a href="/">+62 823-9943-1723</a>
                                </li>

                                <li>
                                    <i class='bx bx-envelope'></i>
                                    <a href="/"><span class="__cf_email__" data-cfemail="bfd7dad3d3d0ffd9d6dbd091dcd0d2">[email&#160;protected]</span></a>
                                </li>

                                <li>
                                    <i class='bx bx-time'></i>
                                    9 AM - 5 PM (Sun-Thur)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright-area">
                <div class="container">
                    <div class="copyright-area-content">
                        <p>
                            Copyright @<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> {{ config('app.name') }}. All Rights Reserved by
                            <a href="https://adhyy.my.id/" target="_blank">Adhyy</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class='bx bx-chevron-up'></i>
        </div>
        <!-- End Go Top Area -->

        <!-- Links of JS files -->
        <script src="{{ asset('default') }}/assets/js/jquery.min.js"></script>
        <script src="{{ asset('default') }}/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('default') }}/assets/js/jquery.meanmenu.js"></script>
        <script src="{{ asset('default') }}/assets/js/owl.carousel.min.js"></script>
        <script src="{{ asset('default') }}/assets/js/jquery.appear.js"></script>
        <script src="{{ asset('default') }}/assets/js/odometer.min.js"></script>
        <script src="{{ asset('default') }}/assets/js/nice-select.min.js"></script>
        <script src="{{ asset('default') }}/assets/js/jquery-ui.min.js"></script>
        <script src="{{ asset('default') }}/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="{{ asset('default') }}/assets/js/fancybox.min.js"></script>
		<script src="{{ asset('default') }}/assets/js/jquery.ajaxchimp.min.js"></script>
		<script src="{{ asset('default') }}/assets/js/form-validator.min.js"></script>
        <script src="{{ asset('default') }}/assets/js/contact-form-script.js"></script>
        <script src="{{ asset('default') }}/assets/js/wow.min.js"></script>
        <script src="{{ asset('default') }}/assets/js/main.js"></script>
    </body>

<!-- Mirrored from templates.envytheme.com/fido/default/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2022 09:59:18 GMT -->
</html>
