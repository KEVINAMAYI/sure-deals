<?php

use App\Models\Carousel;
use App\Models\Category;
use App\Models\Deal;
use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.front-end')] class extends Component {
} ?>
<!--start page content-->
@push('styles')
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="front-end/testimonials/css/owl.carousel.min.css">
    <link rel="stylesheet" href="front-end/testimonials/css/owl.theme.default.min.css">
    <link rel="stylesheet"
          href="front-end/testimonials/https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="front-end/testimonials/css/animate.css">
    <link rel="stylesheet" href="front-end/testimonials/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <link rel="stylesheet" href="front-end/css/main.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css" rel="stylesheet">
@endpush
<div class="page-content">
    <div class="pt-5 pb-5 container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 style="font-weight: bold;" class="heading-section mb-5">What Our Valued Customers Say About Us</h2>
            </div>
            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">
                    <div class="item">
                        <div class="row justify-content-center">
                            <div class="col-md-11">
                                <div class="testimony-wrap d-md-flex">
                                    <div class="img"
                                         style="background-image: url(front-end/testimonials/images/person-1.jpg);"></div>
                                    <div class="text text-center p-4 py-xl-5 px-xl-5 d-flex align-items-center">
                                        <div class="desc w-100">
                                            <p class="h3 mb-5">"Incredible services and amazing customer support</p>
                                            <div class="pt-4">
                                                <p class="name mb-0">&mdash; Joy Smith</p>
                                                <span class="position">Project Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row justify-content-center">
                            <div class="col-md-11">
                                <div class="testimony-wrap d-md-flex">
                                    <div class="img"
                                         style="background-image: url(front-end/testimonials/images/person-2.jpg);"></div>
                                    <div class="text text-center p-4 py-xl-5 px-xl-5 d-flex align-items-center">
                                        <div class="desc w-100">
                                            <p class="h3 mb-5">"Incredible services and amazing customer support</p>
                                            <div class="pt-4">
                                                <p class="name mb-0">&mdash; Rony Smith</p>
                                                <span class="position">Project Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row justify-content-center">
                            <div class="col-md-11">
                                <div class="testimony-wrap d-md-flex">
                                    <div class="img"
                                         style="background-image: url(front-end/testimonials/images/person-3.jpg);"></div>
                                    <div class="text text-center p-4 py-xl-5 px-xl-5 d-flex align-items-center">
                                        <div class="desc w-100">
                                            <p class="h3 mb-5">"Incredible services and amazing customer support</p>
                                            <div class="pt-4">
                                                <p class="name mb-0">&mdash; John Doe</p>
                                                <span class="position">Project Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script src="front-end/testimonials/js/jquery.min.js"></script>
    <script src="front-end/testimonials/js/popper.js"></script>
    <script src="front-end/testimonials/js/bootstrap.min.js"></script>
    <script src="front-end/testimonials/js/owl.carousel.min.js"></script>
    <script src="front-end/testimonials/js/main.js"></script>
@endpush



