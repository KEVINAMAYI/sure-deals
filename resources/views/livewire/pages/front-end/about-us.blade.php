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
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/bsb-btn-size/bsb-btn-size.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/margin/margin.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/padding/padding.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/testimonials/testimonial-4/assets/css/testimonial-4.css">
@endpush

<div class="page-content">

    <!--================Home Banner Area =================-->
    <section style="margin-bottom:20px;" class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content d-md-flex justify-content-between align-items-center">
                    <div class="mb-3 mb-md-0">
                        <h2>About Us</h2>
                        <p>Very us move be blessed multiply night</p>
                    </div>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="category.html">Shop</a>
                        <a href="category.html">Women Fashion</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!-- About 2 Section -->
    <!-- About 1 - Bootstrap Brain Component -->
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <img class="img-fluid rounded" loading="lazy" src="front-end/img/product/feature-product/f-p-1.jpg" alt="About 1">
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h2 class="mb-3">Who Are We?</h2>
                            <p class="lead fs-4 text-secondary mb-3">We help people to build incredible brands and superior products. Our perspective is to furnish outstanding captivating services.</p>
                            <p class="mb-5">We are a fast-growing company, but we have never lost sight of our core values. We believe in collaboration, innovation, and customer satisfaction. We are always looking for new ways to improve our products and services.</p>
                            <div class="row gy-4 gy-md-0 gx-xxl-5X">
                                <div class="col-12 col-md-6">
                                    <div class="d-flex">
                                        <div class="me-4 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h2 class="h4 mb-3">Versatile Brand</h2>
                                            <p class="text-secondary mb-0">We are crafting a digital method that subsists life across all mediums.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="d-flex">
                                        <div class="me-4 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                                                <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h2 class="h4 mb-3">Digital Agency</h2>
                                            <p class="text-secondary mb-0">We believe in innovation by merging primary with elaborate ideas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About 7 - Bootstrap Brain Component -->
    <section class="py-3 py-md-5 py-xl-8">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                    <h2 class="mb-4 display-5 text-center">About Us</h2>
                    <p class="text-secondary mb-5 text-center lead fs-4">We believe in the power of teamwork and collaboration. Our diverse experts work tirelessly to deliver innovative solutions tailored to our clients' needs.</p>
                    <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row gy-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6">
                    <img class="img-fluid rounded border border-dark" loading="lazy" src="front-end/img/product/feature-product/f-p-2.jpg" alt="About Us">
                </div>
                <div class="col-12 col-lg-6 col-xxl-6">
                    <div class="row justify-content-lg-end">
                        <div class="col-12 col-lg-11">
                            <div class="about-wrapper">
                                <p class="lead mb-4 mb-md-5">As a socially responsible entity, we are deeply committed to positively impacting the communities we serve and the world at large. Through various initiatives and partnerships, we actively contribute to environmental sustainability, social welfare, and educational advancement.</p>
                                <div class="row gy-4 mb-4 mb-md-5">
                                    <div class="col-12 col-md-6">
                                        <div class="card border border-dark">
                                            <div class="card-body p-4">
                                                <h3 class="display-5 fw-bold text-primary text-center mb-2">370+</h3>
                                                <p class="fw-bold text-center m-0">Qualified Experts</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="card border border-dark">
                                            <div class="card-body p-4">
                                                <h3 class="display-5 fw-bold text-primary text-center mb-2">18k+</h3>
                                                <p class="fw-bold text-center m-0">Satisfied Clients</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#!" class="btn btn-primary bsb-btn-2xl">
                                    Explore
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial 4 - Bootstrap Brain Component -->
    <section class="py-3 py-md-5 py-xl-8">
        <div class="container overflow-hidden">
            <div class="row gy-3 gy-lg-4">
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-body p-4 p-xxl-5">
                            <div class="bsb-ratings text-warning mb-3" data-bsb-star="5" data-bsb-star-off="0"></div>
                            <blockquote class="bsb-blockquote-icon mb-3">We were so impressed with the work they did for us. They were able to take our vision and turn it into a reality, and they did it all on time and within budget. We would highly recommend them to anyone looking for a reliable and professional partner.</blockquote>
                            <figure class="d-flex align-items-center m-0 p-0">
                                <img class="img-fluid rounded rounded-circle m-0 border border-5" loading="lazy" src="./assets/img/testimonial-img-1.jpg" alt="Luna John">
                                <figcaption class="ms-3">
                                    <h4 class="mb-1 h5">Luna John</h4>
                                    <h5 class="fs-6 text-secondary mb-0">UX Designer</h5>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-body p-4 p-xxl-5">
                            <div class="bsb-ratings text-warning mb-3" data-bsb-star="4" data-bsb-star-off="1"></div>
                            <blockquote class="bsb-blockquote-icon mb-3">We were looking for a company that could help us develop a new website that was both visually appealing and user-friendly. We are so happy with the results, and we would highly recommend them to anyone looking for a new website.</blockquote>
                            <figure class="d-flex align-items-center m-0 p-0">
                                <img class="img-fluid rounded rounded-circle m-0 border border-5" loading="lazy" src="./assets/img/testimonial-img-2.jpg" alt="Mark Smith">
                                <figcaption class="ms-3">
                                    <h4 class="mb-1 h5">Mark Smith</h4>
                                    <h5 class="fs-6 text-secondary mb-0">Marketing Specialist</h5>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-body p-4 p-xxl-5">
                            <div class="bsb-ratings text-warning mb-3" data-bsb-star="3" data-bsb-star-off="2"></div>
                            <blockquote class="bsb-blockquote-icon mb-3">We were struggling to manage our finances effectively. We needed help developing a financial plan. They create a financial plan that worked for us, and they showed us how to track our spending more effectively. We are so grateful for the help.</blockquote>
                            <figure class="d-flex align-items-center m-0 p-0">
                                <img class="img-fluid rounded rounded-circle m-0 border border-5" loading="lazy" src="./assets/img/testimonial-img-3.jpg" alt="Michael Wilson">
                                <figcaption class="ms-3">
                                    <h4 class="mb-1 h5">Michael Wilson</h4>
                                    <h5 class="fs-6 text-secondary mb-0">SEO Expert</h5>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-body p-4 p-xxl-5">
                            <div class="bsb-ratings text-warning mb-3" data-bsb-star="5" data-bsb-star-off="0"></div>
                            <blockquote class="bsb-blockquote-icon mb-3">We were looking for a company that could help us with our branding. We needed a website and marketing materials. They were able to create a brand identity that we loved. They worked with us to develop a logo that represented our company.</blockquote>
                            <figure class="d-flex align-items-center m-0 p-0">
                                <img class="img-fluid rounded rounded-circle m-0 border border-5" loading="lazy" src="./assets/img/testimonial-img-4.jpg" alt="Luke Reeves">
                                <figcaption class="ms-3">
                                    <h4 class="mb-1 h5">Luke Reeves</h4>
                                    <h5 class="fs-6 text-secondary mb-0">Sales Manager</h5>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!--end page content-->



