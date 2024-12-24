<?php

use App\Models\Carousel;
use App\Models\Category;
use App\Models\Deal;
use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.front-end')] class extends Component {
} ?>

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <link rel="stylesheet" href="front-end/css/main.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css" rel="stylesheet">
@endpush
<!--start page content-->
<div class="page-content">
    <!-- ================ contact section start ================= -->
    <div class="container">
        <div class="d-none d-sm-block mb-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7835453580087!2d36.8591386085034!3d-1.3049486356370585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f117be8af8043%3A0x9877703426b50745!2sOff%20Enterprise%20Road!5e0!3m2!1sen!2ske!4v1734600280893!5m2!1sen!2ske"
                width="1100" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8 mb-4 mb-lg-0">
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                      novalidate="novalidate">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input style="border:1px solid green;" class="form-control" name="subject"
                                       id="subject" type="text"
                                       placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input style="border:1px solid green;" class="form-control" name="name" id="name"
                                       type="text"
                                       placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input style="border:1px solid green;" class="form-control" name="email" id="email"
                                       type="email"
                                       placeholder="Enter email address">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                    <textarea style="border:1px solid green;" class="form-control w-100" name="message"
                                              id="message" cols="30" rows="9"
                                              placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-lg-3">
                        <button type="submit" class="main_btn">Send Message</button>
                    </div>
                </form>


            </div>

            <div class="col-lg-4">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Nairobi Industrial Area.</h3>
                        <p>Enterprise road , Road A,off Enterprise road.</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3><a href="tel:254791397770">0791397770</a></h3>
                        <h3><a href="tel:254719619551">0719619551</a></h3>
                        <h3><a href="tel:254712199576">0712199576</a></h3>
                        <h3><a href="tel:254700203468">0700203468</a></h3>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>
                            <a href="mailto:Suredealsbuildingstoresltd@gmail.com">Suredealsbuildingstoresltd@gmail.com</a>
                        </h3>
                        <p>Send us your inquiry anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ contact section end ================= -->
</div>
<!--end page content-->



