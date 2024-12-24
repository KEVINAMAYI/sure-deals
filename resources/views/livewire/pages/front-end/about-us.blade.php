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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <link rel="stylesheet" href="front-end/css/main.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css" rel="stylesheet">
@endpush

<div class="container">

    <section style="margin-top:-80px;" id="about" class="about section">

        <div class="container">

            <div class="row position-relative">

                <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200"><img
                        src="front-end/img/tools.jpg"></div>

                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                    <div class="our-story">
                        <h3>About Sure Deals</h3>
                        <p>Sure deals building stores ltd deals with construction materials , construction tools and
                            equipment . We also do professional installations.
                            Some of the Products we sell include</p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i>
                                <span>Repair and Construction Materials</span></li>
                            <li><i class="bi bi-check-circle"></i>
                                <span>Waterproofing Chemicals and Admixtures Materials</span></li>
                            <li><i class="bi bi-check-circle"></i>
                                <span>Flooring Materials</span>
                            </li>
                            <li><i class="bi bi-check-circle"></i>
                                <span>Roofing Materials</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                <span>Agricultural Equipment and Machinery</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                <span>Hand tools and Construction Machinery</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                <span>Industrial Safety wears</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle"></i>
                                <span>Store Equipment</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Stats Counter Section -->
    <section id="stats-counter" class="stats-counter section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Stats</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                        <div>
                            <span class="purecounter mb-2">2000</span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                        <div>
                            <span class="purecounter mb-2">521</span>
                            <p>Products</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-headset color-green flex-shrink-0"></i>
                        <div>
                            <span class="purecounter mb-2">24/7</span>
                            <p>Support</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->
            </div>

        </div>

    </section><!-- /Stats Counter Section -->

    <!-- Alt Services Section -->
    <section id="alt-services" class="alt-services section">

        <div class="container">

            <div class="row justify-content-around gy-4">
                <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img
                        src="front-end/img/location.png" alt=""></div>

                <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <h3>Contact Information</h3>
                    <p>Get In Touch Now and will Help you.</p>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-envelope-arrow-down"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Email</a></h4>
                            <p>Suredealsbuildingstoresltd@gmail.com</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-telephone-fill flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Contact</a></h4>
                            <p>0791397770</p>
                            <p>0719619551</p>
                            <p>0712199576</p>
                            <p>0700203468</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-crosshair flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Business Location</a></h4>
                            <p>Nairobi Industrial Area , Enterprise road , Road A ,off Enterprise road .</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Alt Services Section -->

    <!-- Alt Services 2 Section -->
    <section id="alt-services-2" class="alt-services-2 section">

        <div class="container">

            <div class="row justify-content-around gy-4">

                <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up"
                     data-aos-delay="100">
                    <h3>Product Categories</h3>
                    <p>Some of our product categories</p>

                    <div class="row">

                        <div class="col-lg-6 icon-box d-flex">
                            <i class="bi bi-tools flex-shrink-0"></i>
                            <div>
                                <h4>Repair and Construction</h4>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-lg-6 icon-box d-flex">
                            <i class="bi bi-water flex-shrink-0"></i>
                            <div>
                                <h4>waterproofing chemicals and admixtures</h4>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-lg-6 icon-box d-flex">
                            <i class="bi bi-align-top flex-shrink-0"></i>
                            <div>
                                <h4>Flooring</h4>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-lg-6 icon-box d-flex">
                            <i class="bi bi-buildings flex-shrink-0"></i>
                            <div>
                                <h4>Roofing</h4>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-lg-6 icon-box d-flex">
                            <i class="bi bi-truck flex-shrink-0"></i>
                            <div>
                                <h4>Agricultural equipment and machinery</h4>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-lg-6 icon-box d-flex">
                            <i class="bi bi-gear-wide flex-shrink-0"></i>
                            <div>
                                <h4>Hand tools and construction machineries</h4>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-lg-6 icon-box d-flex">
                            <i class="bi bi-shield flex-shrink-0"></i>
                            <div>
                                <h4>Industrial Safety Wears</h4>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-lg-6 icon-box d-flex">
                            <i class="bi bi-box flex-shrink-0"></i>
                            <div>
                                <h4>Store equipments</h4>
                            </div>
                        </div><!-- End Icon Box -->

                    </div>

                </div>

                <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
                    <img src="front-end/img/about-materials.jpg" alt="">
                </div>
            </div>
        </div>
    </section><!-- /Alt Services 2 Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Testimonials</h2>
            <p>What Our Clients Say About Us</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 2,
                  "spaceBetween": 20
                }
              }
            }


                </script>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Kevin Amayi</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Sure Deals is a company you can rely when you need construction materials.
                                        Their prices are fair and their products are of high quality.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- /Testimonials Section -->
</div>
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js">
@endpush



