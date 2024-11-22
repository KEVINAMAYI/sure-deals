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
<div class="page-content">
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div
                    class="banner_content d-md-flex justify-content-between align-items-center"
                >
                    <div class="mb-3 mb-md-0">
                        <h2>Product Details</h2>
                        <p>Very us move be blessed multiply night</p>
                    </div>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="single-product.html">Product Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Single Product Area =================-->
    <div class="product_image_area">
        <div class="container">
            <div class="row s_product_inner">
                <div class="col-lg-6">
                    <div class="s_product_img">
                        <div
                            id="carouselExampleIndicators"
                            class="carousel slide"
                            data-ride="carousel"
                        >
                            <ol class="carousel-indicators">
                                <li
                                    data-target="#carouselExampleIndicators"
                                    data-slide-to="0"
                                    class="active"
                                >
                                    <img
                                        src="front-end/img/product/single-product/s-product-s-2.jpg"
                                        alt=""
                                    />
                                </li>
                                <li
                                    data-target="#carouselExampleIndicators"
                                    data-slide-to="1"
                                >
                                    <img
                                        src="front-end/img/product/single-product/s-product-s-3.jpg"
                                        alt=""
                                    />
                                </li>
                                <li
                                    data-target="#carouselExampleIndicators"
                                    data-slide-to="2"
                                >
                                    <img
                                        src="front-end/img/product/single-product/s-product-s-4.jpg"
                                        alt=""
                                    />
                                </li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img
                                        class="d-block w-100"
                                        src="front-end/img/product/single-product/s-product-1.jpg"
                                        alt="First slide"
                                    />
                                </div>
                                <div class="carousel-item">
                                    <img
                                        class="d-block w-100"
                                        src="front-end/img/product/single-product/s-product-1.jpg"
                                        alt="Second slide"
                                    />
                                </div>
                                <div class="carousel-item">
                                    <img
                                        class="d-block w-100"
                                        src="front-end/img/product/single-product/s-product-1.jpg"
                                        alt="Third slide"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3>Faded SkyBlu Denim Jeans</h3>
                        <h2>$149.99</h2>
                        <ul class="list">
                            <li>
                                <a class="active" href="#">
                                    <span>Category</span> : Household</a
                                >
                            </li>
                            <li>
                                <a href="#"> <span>Availibility</span> : In Stock</a>
                            </li>
                        </ul>
                        <p>
                            Mill Oil is an innovative oil filled radiator with the most
                            modern technology. If you are looking for something that can
                            make your interior look awesome, and at the same time give you
                            the pleasant warm feeling during the winter.
                        </p>
                        <div style="margin-top:-20px; margin-bottom:20px;" class="review_box">
                            <div class="row total_rate">
                                <div class="col-6">
                                    <div style="text-align:center; background-color: rgb(246,246,246);" class="pt-2 pb-2 box_total">
                                        <h5 style="font-size:20px;  font-weight:bold;">Overall Ratings</h5>
                                        <h4 style="font-size:50px;  color:rgb(113,205,20); font-weight:bold;">4.0</h4>
                                        <h6>(30 Reviews)</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_area">
                            <a class="main_btn" href="#">
                                <i class="fab fa-whatsapp"></i>
                                Buy on Whatsapp
                            </a>
                            <a class="main_btn" href="#">
                                <i class="fas fa-phone"></i>
                                Request CallBack
                            </a>
                            <a style="width: 45%;" class="mt-2 main_btn" href="#">
                                <i class="fas fa-envelope"></i>
                                Send Email
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->

    <!--================Product Description Area =================-->
    <section class="product_description_area">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a
                        class="nav-link"
                        id="home-tab"
                        data-toggle="tab"
                        href="#home"
                        role="tab"
                        aria-controls="home"
                        aria-selected="true"
                    >Description</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link active"
                        id="review-tab"
                        data-toggle="tab"
                        href="#review"
                        role="tab"
                        aria-controls="review"
                        aria-selected="false"
                    >Reviews</a
                    >
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div
                    class="tab-pane fade"
                    id="home"
                    role="tabpanel"
                    aria-labelledby="home-tab"
                >
                    <p>
                        Beryl Cook is one of Britain’s most talented and amusing artists
                        .Beryl’s pictures feature women of all shapes and sizes enjoying
                        themselves .Born between the two world wars, Beryl Cook eventually
                        left Kendrick School in Reading at the age of 15, where she went
                        to secretarial school and then into an insurance office. After
                        moving to London and then Hampton, she eventually married her next
                        door neighbour from Reading, John Cook. He was an officer in the
                        Merchant Navy and after he left the sea in 1956, they bought a pub
                        for a year before John took a job in Southern Rhodesia with a
                        motor company. Beryl bought their young son a box of watercolours,
                        and when showing him how to use it, she decided that she herself
                        quite enjoyed painting. John subsequently bought her a child’s
                        painting set for her birthday and it was with this that she
                        produced her first significant work, a half-length portrait of a
                        dark-skinned lady with a vacant expression and large drooping
                        breasts. It was aptly named ‘Hangover’ by Beryl’s husband and
                    </p>
                    <p>
                        It is often frustrating to attempt to plan meals that are designed
                        for one. Despite this fact, we are seeing more and more recipe
                        books and Internet websites that are dedicated to the act of
                        cooking for one. Divorce and the death of spouses or grown
                        children leaving for college are all reasons that someone
                        accustomed to cooking for more than one would suddenly need to
                        learn how to adjust all the cooking practices utilized before into
                        a streamlined plan of cooking that is more efficient for one
                        person creating less
                    </p>
                </div>
                <div
                    class="tab-pane fade show active"
                    id="review"
                    role="tabpanel"
                    aria-labelledby="review-tab"
                >
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row total_rate">
                                <div class="col-6">
                                    <div class="box_total">
                                        <h5>Overall</h5>
                                        <h4>4.0</h4>
                                        <h6>(03 Reviews)</h6>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="rating_list">
                                        <h3>Based on 3 Reviews</h3>
                                        <ul class="list">
                                            <li>
                                                <a href="#"
                                                >5 Star
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i> 01</a
                                                >
                                            </li>
                                            <li>
                                                <a href="#"
                                                >4 Star
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i> 01</a
                                                >
                                            </li>
                                            <li>
                                                <a href="#"
                                                >3 Star
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i> 01</a
                                                >
                                            </li>
                                            <li>
                                                <a href="#"
                                                >2 Star
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i> 01</a
                                                >
                                            </li>
                                            <li>
                                                <a href="#"
                                                >1 Star
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i> 01</a
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="review_list">
                                <div class="review_item">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img
                                                src="front-end/img/product/single-product/review-1.png"
                                                alt=""
                                            />
                                        </div>
                                        <div class="media-body">
                                            <h4>Blake Ruiz</h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo
                                    </p>
                                </div>
                                <div class="review_item">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img
                                                src="front-end/img/product/single-product/review-2.png"
                                                alt=""
                                            />
                                        </div>
                                        <div class="media-body">
                                            <h4>Blake Ruiz</h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo
                                    </p>
                                </div>
                                <div class="review_item">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img
                                                src="front-end/img/product/single-product/review-3.png"
                                                alt=""
                                            />
                                        </div>
                                        <div class="media-body">
                                            <h4>Blake Ruiz</h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="review_box">
                                <h4>Add a Review</h4>
                                <p>Your Rating:</p>
                                <ul class="list">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star"></i>
                                        </a>
                                    </li>
                                </ul>
                                <p>Outstanding</p>
                                <form
                                    class="row contact_form"
                                    action="contact_process.php"
                                    method="post"
                                    id="contactForm"
                                    novalidate="novalidate"
                                >
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="name"
                                                name="name"
                                                placeholder="Your Full name"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input
                                                type="email"
                                                class="form-control"
                                                id="email"
                                                name="email"
                                                placeholder="Email Address"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="number"
                                                name="number"
                                                placeholder="Phone Number"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                        <textarea
                            class="form-control"
                            name="message"
                            id="message"
                            rows="5"
                            placeholder="Comments"
                        ></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button
                                            type="submit"
                                            value="submit"
                                            class="btn submit_btn"
                                        >
                                            Submit Now
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Product Description Area =================-->
</div>
<!--end page content-->



