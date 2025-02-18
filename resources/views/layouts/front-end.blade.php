<!DOCTYPE html>
<html lang="en">

<head>

    <base href="{{ URL::to('/') }}">

    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="icon" href="img/favicon.png" type="image/png"/>

    <!-- Scripts -->
    @vite('resources/css/front-end.css')

    <title>SURE DEALS</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="front-end/css/bootstrap.css"/>
    <link rel="stylesheet" href="front-end/vendors/linericon/style.css"/>
    <link rel="stylesheet" href="front-end/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="front-end/css/themify-icons.css"/>
    <link rel="stylesheet" href="front-end/css/flaticon.css"/>
    <link rel="stylesheet" href="front-end/vendors/owl-carousel/owl.carousel.min.css"/>
    <link rel="stylesheet" href="front-end/vendors/lightbox/simpleLightbox.css"/>
    <link rel="stylesheet" href="front-end/vendors/nice-select/css/nice-select.css"/>
    <link rel="stylesheet" href="front-end/vendors/animate-css/animate.css"/>
    <link rel="stylesheet" href="front-end/vendors/jquery-ui/jquery-ui.css"/>
    <!-- main css -->
    <link rel="stylesheet" href="front-end/css/style.css"/>
    <link rel="stylesheet" href="front-end/css/responsive.css"/>

    <link href="front-end/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    @stack('styles')
</head>

<body>
<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="top_menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div style="font-weight:bold;" class="float-left">
                        <p style="color:#61AF18;">Phone: 0791397770 | 07196195551 | 0712199576 |
                            0700203468</p>
                        <p style="color:#61AF18;">email: suredealsbuildingstoresltd@gmail.com</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="float-right">
                        <ul class="right_side">
                            <li>
                                <a href="{{ route('front-end.contact') }}">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light w-100">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ route('front-end.index') }}">
                    <img height="80" width="110" src="front-end/img/logo.png" alt=""/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
                    <div class="row w-100 mr-0">
                        <div class="col-lg-7 pr-0">
                            <ul class="nav navbar-nav center_nav pull-right">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('front-end.index') }}">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item submenu dropdown">
                                    <a class="nav-link" href="{{ route('front-end.shop',0) }}">
                                        Shop
                                    </a>
                                </li>
                                <li class="nav-item submenu dropdown">
                                    <a class="nav-link" href="{{ route('front-end.store') }}">
                                        Store
                                    </a>
                                </li>
                                <li class="nav-item submenu dropdown">
                                    <a class="nav-link" href="{{ route('front-end.about-us') }}">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('front-end.testimonials') }}">
                                        Testimonials
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('front-end.contact') }}">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-5 pr-0">
                            <ul class="nav navbar-nav navbar-right right_nav pull-right">
                                <li class="nav-item">
                                    <a href="{{ route('front-end.shop',0) }}" class="icons">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--================Header Menu Area =================-->

{{ $slot }}

<!--================ start footer Area  =================-->
<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 single-footer-widget">
                <h4>Products Categories</h4>
                <ul>
                    <li><a href="{{ route('front-end.shop',1) }}">Repair and Construction Materials</a></li>
                    <li><a href="{{ route('front-end.shop',2) }}">Waterproofing Chemicals and Admixtures</a></li>
                    <li><a href="{{ route('front-end.shop',3) }}">Flooring</a></li>
                    <li><a href="{{ route('front-end.shop',4) }}">Roofing</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 single-footer-widget">
                <h4>More Product Categories</h4>
                <ul>
                    <li><a href="{{ route('front-end.shop',5) }}">Agricultural Equipment and Machinery</a></li>
                    <li><a href="{{ route('front-end.shop',6) }}">Hand tools and Construction Machineries</a></li>
                    <li><a href="{{ route('front-end.shop',7) }}">Industrial Safety Wears</a></li>
                    <li><a href="{{ route('front-end.shop',8) }}">Store Equipment</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 single-footer-widget">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="{{ route('front-end.index') }}">Home</a></li>
                    <li><a href="{{ route('front-end.shop',0) }}">Shop</a></li>
                    <li><a href="{{ route('front-end.store') }}">Store</a></li>
                    <li><a href="{{ route('front-end.about-us') }}">About Us</a></li>
                    <li><a href="{{ route('front-end.contact') }}">Contact Us</a></li>
                    <li><a href="{{ route('front-end.testimonials') }}">Testimonials</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 single-footer-widget">
                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-telephone-fill flex-shrink-0"></i>
                    <div style="margin-left:20px;">
                        <h4 style="margin-bottom:10px;"><a href="" class="stretched-link">Contact</a></h4>
                        <p>0791397770</p>
                        <p>0719619551</p>
                        <p>0712199576</p>
                        <p>0700203468</p>
                    </div>
                </div><!-- End Icon Box -->
                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
                    <i class="bi bi-crosshair flex-shrink-0"></i>
                    <div style="margin-left:20px;">
                        <h4><a href="" class="stretched-link">Business Location</a></h4>
                        <p style="margin-top:-20px;">Nairobi Industrial Area , Enterprise road , Road A ,off Enterprise
                            road.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom row align-items-center">
            <p class="footer-text m-0 col-lg-8 col-md-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                    href="https://suredeals.co.ke" target="_blank">SURE DEALS</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <div class="col-lg-4 col-md-12 footer-social">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="front-end/js/jquery-3.2.1.min.js"></script>
<script src="front-end/js/popper.js"></script>
<script src="front-end/js/bootstrap.min.js"></script>
<script src="front-end/js/stellar.js"></script>
<script src="front-end/vendors/lightbox/simpleLightbox.min.js"></script>
<script src="front-end/vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="front-end/vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="front-end/vendors/isotope/isotope-min.js"></script>
<script src="front-end/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="front-end/js/jquery.ajaxchimp.min.js"></script>
<script src="front-end/vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="front-end/vendors/counter-up/jquery.counterup.js"></script>
<script src="front-end/js/mail-script.js"></script>
<script src="front-end/js/theme.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@stack('scripts')
<x-livewire-alert::scripts/>
</body>
</html>
