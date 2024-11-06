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

    <section id="about" class="about section">

        <div class="container">

            <div class="row position-relative">

                <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200"><img
                        src="front-end/img/product/feature-product/f-p-1.jpg"></div>

                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="inner-title">Consequatur eius et magnam</h2>
                    <div class="our-story">
                        <h4>Est 1988</h4>
                        <h3>Our Story</h3>
                        <p>Inventore aliquam beatae at et id alias. Ipsa dolores amet consequuntur minima quia maxime
                            autem. Quidem id sed ratione. Tenetur provident autem in reiciendis rerum at dolor. Aliquam
                            consectetur laudantium temporibus dicta minus dolor.</p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i>
                                <span>Ullamco laboris nisi ut aliquip ex ea commo</span></li>
                            <li><i class="bi bi-check-circle"></i>
                                <span>Duis aute irure dolor in reprehenderit in</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span>
                            </li>
                        </ul>
                        <p>Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit
                            repellendus porro in quo eveniet. Molestias in maxime doloremque.</p>

                        <div class="watch-video d-flex align-items-center position-relative">
                            <i class="bi bi-play-circle"></i>
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox stretched-link">Watch
                                Video</a>
                        </div>
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
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                  class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                  class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-headset color-green flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                                  class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-people color-pink flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                  class="purecounter"></span>
                            <p>Hard Workers</p>
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
                        src="front-end/img/product/feature-product/f-p-1.jpg" alt=""></div>

                <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
                    <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima
                        temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-easel flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate non provident</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-patch-check flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                            <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut
                                deserunt minus aut eligendi omnis</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Tride clov</a></h4>
                            <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non
                                aspernatur odit amet. Et eligendi</p>
                        </div>
                    </div><!-- End Icon Box -->

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
                    <h3>Enim quis est voluptatibus aliquid consequatur</h3>
                    <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima
                        temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

                    <div class="row">

                        <div class="col-lg-6 icon-box d-flex">
                            <i class="bi bi-easel flex-shrink-0"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias </p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-lg-6 icon-box d-flex">
                            <i class="bi bi-patch-check flex-shrink-0"></i>
                            <div>
                                <h4>Nemo Enim</h4>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiise</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-lg-6 icon-box d-flex">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4>Dine Pad</h4>
                                <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="col-lg-6 icon-box d-flex">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4>Tride clov</h4>
                                <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit</p>
                            </div>
                        </div><!-- End Icon Box -->

                    </div>

                </div>

                <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
                    <img src="front-end/img/product/feature-product/f-p-1.jpg" alt="">
                </div>
            </div>
        </div>
    </section><!-- /Alt Services 2 Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Testimonials</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
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
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
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



