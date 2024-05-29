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
                                    <a href="{{ route('landing-page') }}" class="nav-link active">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('landing-page.about') }}" class="nav-link">Tentang</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('landing-page.contact') }}" class="nav-link">Kontak</a>
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

        <!-- Start Main Slides With Featured Area -->
        <div class="main-slides-with-featured-area">
            <div class="home-slides-two owl-carousel owl-theme">
                @foreach ($data['kost'] as $item)
                <div class="slides-item-box item-{{ $item->id }}">
                    <div class="container">
                        <div class="slides-content-box">
                            <div class="top-content">
                                <ul class="tag-list">
                                    <li class="featured"><a href="javascript:void(0);">Featured</a></li>
                                </ul>

                                {{-- <div class="price">@currency($item->harga_sewa)</div> --}}
                                <span>{{ $item->keamanan }}</span>
                                <h3>
                                    <a href="javascript:void(0);">{{ $item->nama_kost }}</a>
                                </h3>
                                <p>{{ $item->desain_rumah }}</p>
                                <p>{{ $item->tipe_kost }}</p>

                                <ul class="featured-list">
                                    <li><i class='bx bx-bed'></i>{{ implode(' . ', json_decode($item->fasilitas)) }}</li>
                                </ul>
                            </div>

                            <div class="bottom-content">
                                <ul class="rating-list">
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li><i class='bx bxs-star'></i></li>
                                    <li class="color-gray"><i class='bx bxs-star'></i></li>
                                    <li>{{ $item->panjangkamar }} x {{ $item->lebarkamar }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End Main Slides With Featured Area -->

        <!-- Start Featured Area -->
        <div class="featured-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h3>Rekomendasi Kost</h3>
                </div>

                <div class="featured-slides owl-carousel owl-theme">
                    @foreach ($data['kost'] as $k)
                    <div class="featured-item-box">
                        <div class="featured-image">
                            <a href="javascript:void(0);"><img src="{{ asset('admin/demo/app/images') }}/{{ $k->gambar }}" alt="image"></a>

                           <div class="tag"><a href="javascript:void(0);">{{ $k->tipe_kost }}</a></div>

                            <div class="featured-top-content">
                                <span>{{ $k->keamanan }}</span>
                                <h3>
                                    <a href="javascript:void(0);">{{ $k->nama_kost }}</a>
                                </h3>
                                <p>@currency($k->harga_sewa) /bulan</p>

                                <ul class="featured-list">
                                    <li><i class='bx bx-bed'></i>{{ implode(' . ', json_decode($k->fasilitas)) }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="featured-bottom-content">
                            <ul class="rating-list">
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li class="color-gray"><i class='bx bxs-star'></i></li>
                                <li>{{ $k->panjangkamar }} x {{ $k->lebarkamar }}m<sup>2</sup></li>
                            </ul>

                            <div class="featured-btn">
                                <a href="javascript:void(0);" class="default-btn">{{ $k->rank }}<span></span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Featured Area -->


        <!-- Start Facilities Area -->
        <div class="facilities-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h3>Daftar Fasilitas Kost</h3>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-facilities">
                            <div class="image">
                                <img src="{{ asset('default') }}/assets/images/facilities/facilities-1.png" alt="image">
                            </div>

                            <h3>Lokasi kost yang dekat</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-facilities">
                            <div class="image">
                                <img src="{{ asset('default') }}/assets/images/facilities/facilities-2.png" alt="image">
                            </div>

                            <h3>Aman dari Pencurian</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-facilities">
                            <div class="image">
                                <img src="{{ asset('default') }}/assets/images/facilities/facilities-3.png" alt="image">
                            </div>

                            <h3>Sekat Gypsum</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-facilities">
                            <div class="image">
                                <img src="{{ asset('default') }}/assets/images/facilities/facilities-4.png" alt="image">
                            </div>

                            <h3>Kost yang Bersih</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-facilities">
                            <div class="image">
                                <img src="{{ asset('default') }}/assets/images/facilities/facilities-5.png" alt="image">
                            </div>

                            <h3>Penjaga Kost</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-facilities">
                            <div class="image">
                                <img src="{{ asset('default') }}/assets/images/facilities/facilities-6.png" alt="image">
                            </div>

                            <h3>Harga sewa murah</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Facilities Area -->

        <!-- Start Customers Area -->
        {{-- <div class="customers-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h3>Review dari Mahasiswa</h3>
                </div>

                <div class="customers-slides owl-carousel owl-theme">
                    <div class="customers-item">
                        <div class="customers-info">
                            <div class="image">
                                <img src="{{ asset('default') }}/assets/images/customers/image-1.jpg" alt="image">
                            </div>

                            <h4>Thomas Josaf</h4>
                            <span>CEO of Gacsor</span>
                        </div>
                        <p>Proin gravida nibh vel velit attor aliquet. Aenean sollicitudin lorem quis bibendum auctor.</p>

                        <ul class="rating-list">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li class="color-gray"><i class='bx bxs-star'></i></li>
                        </ul>
                    </div>

                    <div class="customers-item">
                        <div class="customers-info">
                            <div class="image">
                                <img src="{{ asset('default') }}/assets/images/customers/image-2.jpg" alt="image">
                            </div>

                            <h4>John Smith</h4>
                            <span>Restaurant Owner</span>
                        </div>
                        <p>Proin gravida nibh vel velit attor aliquet. Aenean sollicitudin lorem quis bibendum auctor.</p>

                        <ul class="rating-list">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li class="color-gray"><i class='bx bxs-star'></i></li>
                        </ul>
                    </div>

                    <div class="customers-item">
                        <div class="customers-info">
                            <div class="image">
                                <img src="{{ asset('default') }}/assets/images/customers/image-3.jpg" alt="image">
                            </div>

                            <h4>Andy James</h4>
                            <span>Hotel Owner</span>
                        </div>
                        <p>Proin gravida nibh vel velit attor aliquet. Aenean sollicitudin lorem quis bibendum auctor.</p>

                        <ul class="rating-list">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li class="color-gray"><i class='bx bxs-star'></i></li>
                        </ul>
                    </div>

                    <div class="customers-item">
                        <div class="customers-info">
                            <div class="image">
                                <img src="{{ asset('default') }}/assets/images/customers/image-4.jpg" alt="image">
                            </div>

                            <h4>Alex Hales</h4>
                            <span>Developer</span>
                        </div>
                        <p>Proin gravida nibh vel velit attor aliquet. Aenean sollicitudin lorem quis bibendum auctor.</p>

                        <ul class="rating-list">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li class="color-gray"><i class='bx bxs-star'></i></li>
                        </ul>
                    </div>

                    <div class="customers-item">
                        <div class="customers-info">
                            <div class="image">
                                <img src="{{ asset('default') }}/assets/images/customers/image-1.jpg" alt="image">
                            </div>

                            <h4>Thomas Josaf</h4>
                            <span>CEO of Gacsor</span>
                        </div>
                        <p>Proin gravida nibh vel velit attor aliquet. Aenean sollicitudin lorem quis bibendum auctor.</p>

                        <ul class="rating-list">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li class="color-gray"><i class='bx bxs-star'></i></li>
                        </ul>
                    </div>

                    <div class="customers-item">
                        <div class="customers-info">
                            <div class="image">
                                <img src="{{ asset('default') }}/assets/images/customers/image-2.jpg" alt="image">
                            </div>

                            <h4>John Smith</h4>
                            <span>Restaurant Owner</span>
                        </div>
                        <p>Proin gravida nibh vel velit attor aliquet. Aenean sollicitudin lorem quis bibendum auctor.</p>

                        <ul class="rating-list">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li class="color-gray"><i class='bx bxs-star'></i></li>
                        </ul>
                    </div>

                    <div class="customers-item">
                        <div class="customers-info">
                            <div class="image">
                                <img src="{{ asset('default') }}/assets/images/customers/image-3.jpg" alt="image">
                            </div>

                            <h4>Andy James</h4>
                            <span>Hotel Owner</span>
                        </div>
                        <p>Proin gravida nibh vel velit attor aliquet. Aenean sollicitudin lorem quis bibendum auctor.</p>

                        <ul class="rating-list">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li class="color-gray"><i class='bx bxs-star'></i></li>
                        </ul>
                    </div>

                    <div class="customers-item">
                        <div class="customers-info">
                            <div class="image">
                                <img src="{{ asset('default') }}/assets/images/customers/image-4.jpg" alt="image">
                            </div>

                            <h4>Alex Hales</h4>
                            <span>Developer</span>
                        </div>
                        <p>Proin gravida nibh vel velit attor aliquet. Aenean sollicitudin lorem quis bibendum auctor.</p>

                        <ul class="rating-list">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li class="color-gray"><i class='bx bxs-star'></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End Customers Area -->

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
