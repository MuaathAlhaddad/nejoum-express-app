<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />

    <!-- PAGE TITLE HERE -->
    <title>Logitrago Template | Home Page Style 2</title>

    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- SLICK CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.min.css') }}">
    <!-- SLICK CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css') }}">
    <!-- SWIPER SLIDER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/swiper-bundle.min.css') }}" />
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- Lc light box popup -->
    <link rel="stylesheet" href="{{ asset('css/lc_lightbox.css') }}" />
    <!-- Price Range Slider -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-slider.min.css') }}" />


</head>

<body>

<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div id="outer-barG">
            <div id="front-barG" class="bar-animationG">
                <div id="barG_1" class="bar-lineG"></div>
                <div id="barG_2" class="bar-lineG"></div>
                <div id="barG_3" class="bar-lineG"></div>
            </div>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

<div class="page-wraper">

    <!-- HEADER START -->
    <header class="site-header header-style-3 mobile-sider-drawer-menu">

        <div class="sticky-header main-bar-wraper  navbar-expand-lg">
            <div class="main-bar">

                <div class="container-fluid clearfix">

                    <div class="logo-header">
                        <div class="logo-header-inner logo-header-one">
                            <a href="index.html">
                                <img src="{{ asset('images/logo-dark.png') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <!-- NAV Toggle Button -->
                    <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar icon-bar-first"></span>
                        <span class="icon-bar icon-bar-two"></span>
                        <span class="icon-bar icon-bar-three"></span>
                    </button>

                    <!-- MAIN Vav -->
                    <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">

                        <ul class=" nav navbar-nav">
                            <li class="has-child"><a href="javascript:;">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index-2.html">Home</a></li>
                                </ul>
                            </li>
                            <li class="has-child"><a href="javascript:;">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="about-1.html">About Us</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="error-404.html">Error 404</a></li>
                                </ul>
                            </li>
                            <li class="has-child"><a href="javascript:;">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="services-1.html">Services 1</a></li>
                                    <li><a href="services-2.html">Services 2</a></li>
                                    <li><a href="services-detail.html">Services Detail</a></li>
                                </ul>
                            </li>

                            <li class="has-child"><a href="javascript:;">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-single.html">Blog Detail</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>

                        </ul>

                    </div>

                    <!-- Header Right Section-->
                    <div class="extra-nav header-2-nav">
                        <div class="extra-cell">
                            <div class="header-search">
                                <a href="#search" class="header-search-icon"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="extra-cell">
                            <div class="header-nav-call-section">


                                <div class="detail">
                                    <span class="title">Free Call In U.S.A</span>
                                    <span><a href="tel:29002344241">2 900 234 4241</a></span>
                                </div>
                                <div class="media">
                                    <img src="images/call.png" alt="#">
                                </div>
                            </div>
                        </div>

                    </div>



                </div>


            </div>

            <!-- SITE Search -->
            <div id="search">
                <span class="close"></span>
                <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                    <input class="form-control" value="" name="q" type="search" placeholder="Type to search"/>
                    <span class="input-group-append">
                            <button type="button" class="search-btn">
                                <i class="fa fa-paper-plane"></i>
                            </button>
                        </span>
                </form>
            </div>
        </div>

    </header>
    <!-- HEADER END -->

    <!-- CONTENT START -->
        @yield('content')
    <!-- CONTENT END -->

    <!-- FOOTER START -->
    <footer class="footer-light">

        <!-- NEWS LETTER SECTION START -->
        <div class="ftr-nw-ltr site-bg-white">

            <div class="ftr-nw-ltr-inner site-bg-primary">
                <div class="container">
                    <div class="ftr-nw-img">
                        <img src="images/news-l-bg.png" alt="">
                    </div>
                    <div class="ftr-nw-content">
                        <div class="ftr-nw-title">Subscribe for offers and news</div>
                        <div class="ftr-nw-form">
                            <form>
                                <input name="news-letter" class="form-control" placeholder="Enter Your Email" type="text">
                                <button class="ftr-nw-subcribe-btn">Subscribe Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- NEWS LETTER SECTION END -->

        <div class="ftr-bg">
            <!-- FOOTER BLOCKES START -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-6">

                            <div class="widget widget_about">
                                <div class="logo-footer clearfix">
                                    <a href="index.html"><img src="{{ asset('images/logo-light.png') }}" alt=""></a>
                                </div>
                                <p>Many desktop publishing packages and web page editors now use are dolra Ipsum as their default .</p>
                                <ul class="social-icons">
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-youtube-play"></a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget_services ftr-list-center">
                                <h3 class="widget-title">Quick Links</h3>
                                <ul>
                                    <li><a href="about-1.html">About</a></li>
                                    <li><a href="services-1.html">Services</a></li>
                                    <li><a href="blog-grid.html">Blog</a></li>
                                    <li><a href="about-1.html">FAQ</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget_services ftr-list-center">
                                <h3 class="widget-title">Services</h3>
                                <ul>
                                    <li><a href="services-detail.html">Warehouse</a></li>
                                    <li><a href="services-detail.html">Air Freight</a></li>
                                    <li><a href="services-detail.html">Ocean Freight</a></li>
                                    <li><a href="services-detail.html">Road Freight</a></li>
                                    <li><a href="services-detail.html">Packaging</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget_services ftr-list-center">
                                <h3 class="widget-title">Community</h3>
                                <ul>
                                    <li><a href="about-1.html">Business Consulting</a></li>
                                    <li><a href="about-1.html">Testimonials</a></li>
                                    <li><a href="about-1.html">Track Your Shipment</a></li>
                                    <li><a href="about-1.html">Privacy Policy</a></li>
                                    <li><a href="about-1.html">Terms & Condition</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->

            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom-info">

                        <div class="footer-copy-right">
                            <span class="copyrights-text">Copyright © 2022 by thewebmax All Rights Reserved.</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- FOOTER END -->

    <!-- BUTTON TOP START -->
    <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

</div>


<!-- JAVASCRIPT  FILES ========================================= -->

<script  src="{{ asset('js/jquery-3.6.0.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script  src="{{ asset('js/popper.min.js') }}"></script><!-- POPPER.MIN JS -->
<script  src="{{ asset('js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="{{ asset('js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="{{ asset('js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
<script  src="{{ asset('js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script  src="{{ asset('js/waypoints-sticky.min.js') }}"></script><!-- STICKY HEADER -->
<script  src="{{ asset('js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->
<script  src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script><!-- MASONRY  -->
<script  src="{{ asset('js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
<script  src="{{ asset('js/slick.min.js') }}"></script><!-- SLICK  Slider  -->
<script  src="{{ asset('js/theia-sticky-sidebar.js') }}"></script><!-- STICKY SIDEBAR  -->
<script  src="{{ asset('js/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script  src="{{ asset('js/lc_lightbox.lite.js')}}" ></script><!-- IMAGE POPUP -->
<script  src="{{ asset('js/bootstrap-slider.min.js') }}"></script><!-- Form js -->
<script  src="{{ asset('js/swiper-bundle.min.js') }}"></script><!-- Swiper js -->
<script  src="{{ asset('js/jquery.bgscroll.js') }}"></script><!-- BACKGROUND SCROLL -->
<script  src="{{ asset('js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->

</body>

</html>
