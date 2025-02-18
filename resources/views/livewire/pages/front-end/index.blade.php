<?php

use App\Models\Carousel;
use App\Models\Category;
use App\Models\Deal;
use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.front-end')] class extends Component {

    public $products;
    public $categories;
    public $latest_products;
    public $featured_products;

    public function mount()
    {
        $this->latest_products = Product::whereHas('tags', function ($query) {
            $query->where('slug', 'latest_products');
        })->get();

        $this->featured_products = Product::whereHas('tags', function ($query) {
            $query->where('slug', 'featured_products');
        })->get();

        $this->categories = Category::all();
    }

} ?>
<!--start page content-->

@push('style')
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
@endpush
<div class="page-content">

    <!--================Home Banner Area =================-->
    <div style="margin-bottom: 20px;" class="banner_section layout_padding">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div style="height: auto; min-height: 600px; padding-top: 20px; padding-bottom: 20px; display: flex; align-items: center; justify-content: center; text-align: center;
        background: linear-gradient(to bottom, rgba(0, 128, 0, 0.6), rgba(0, 128, 0, 0.6)), url('front-end/img/banner/banner_image_1.jpg');
        background-size: cover; background-position: center; background-repeat: no-repeat;"
                         class="row">
                        <div class="col-sm-12">
                            <p style="color:white; font-size:40px; font-weight: bold;  font-family: 'Poppins', sans-serif;"
                               class="text-tra">
                                Agricultural Equipment <br><br>
                                and Machinery
                            </p><br>
                            <a href="{{ route('front-end.shop',5 ) ?? 'N/A'  }}"
                               style="padding: 15px 30px; margin-top:-15px; font-size: 18px; color: white; background: #0D0D1F; border-radius: 40px; text-decoration: none; text-transform: uppercase; font-weight: bold; display: inline-block; transition: background 0.3s ease-in-out; font-family: 'Poppins', sans-serif;">
                                SHOP NOW
                            </a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div style="height: auto; min-height: 600px; padding-top: 30px; padding-bottom: 30px; display: flex; align-items: center; justify-content: center; text-align: center;
        background: linear-gradient(to bottom, rgba(0, 128, 0, 0.6), rgba(0, 128, 0, 0.6)), url('front-end/img/banner/banner_image_2.jpg');
        background-size: cover; background-position: center; background-repeat: no-repeat;"
                         class="row">
                        <div class="col-sm-12">
                            <p style="color:white; font-size:40px; font-weight: bold; margin-bottom: 20px; font-family: 'Poppins', sans-serif;"
                               class="text-tra">
                                Hand tools<br><br>
                                and Construction Machineries
                            </p><br>
                            <a href="{{ route('front-end.shop',6 ) ?? 'N/A'  }}"
                               style="padding: 15px 30px; margin-top:-15px;  font-size: 18px; color: white; background: #0D0D1F; border-radius: 40px; text-decoration: none; text-transform: uppercase; font-weight: bold; display: inline-block; transition: background 0.3s ease-in-out; font-family: 'Poppins', sans-serif;">
                                SHOP NOW
                            </a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div style="height: auto; min-height: 600px; padding-top: 20px; padding-bottom: 20px; display: flex; align-items: center; justify-content: center; text-align: center;
        background: linear-gradient(to bottom, rgba(0, 128, 0, 0.6), rgba(0, 128, 0, 0.6)), url('front-end/img/banner/banner_image_3.jpg');
        background-size: cover; background-position: center; background-repeat: no-repeat;"
                         class="row">
                        <div class="col-sm-12">
                            <p style="color:white; font-size:40px; font-weight: bold; margin-bottom: 20px; font-family: 'Poppins', sans-serif;"
                               class="text-tra">
                                Repair <br><br>
                                and Construction Materials
                            </p><br>
                            <a href="{{ route('front-end.shop',1 ) ?? 'N/A'  }}"
                               style="padding: 15px 30px; margin-top:-15px;  font-size: 18px; color: white; background: #0D0D1F; border-radius: 40px; text-decoration: none; text-transform: uppercase; font-weight: bold; display: inline-block; transition: background 0.3s ease-in-out; font-family: 'Poppins', sans-serif;">
                                SHOP NOW
                            </a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div style="height: auto; min-height: 600px; padding-top: 20px; padding-bottom: 20px; display: flex; align-items: center; justify-content: center; text-align: center;
        background: linear-gradient(to bottom, rgba(0, 128, 0, 0.6), rgba(0, 128, 0, 0.6)), url('front-end/img/banner/banner_image_4.jpg');
        background-size: cover; background-position: center; background-repeat: no-repeat;"
                         class="row">
                        <div class="col-sm-12">
                            <p style="color:white; font-size:40px; font-weight: bold; margin-bottom: 20px; font-family: 'Poppins', sans-serif;"
                               class="text-tra">
                                Waterproofing Chemicals<br><br>
                                and Admixtures
                            </p><br>
                            <a href="{{ route('front-end.shop',2) ?? 'N/A'  }}"
                               style="padding: 15px 30px; margin-top:-15px; font-size: 18px; color: white; background: #0D0D1F; border-radius: 40px; text-decoration: none; text-transform: uppercase; font-weight: bold; display: inline-block; transition: background 0.3s ease-in-out; font-family: 'Poppins', sans-serif;">
                                SHOP NOW
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Home Banner Area =================-->

    <!-- Start feature Area -->
    <section class="feature-area section_gap_bottom_custom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="flaticon-money"></i>
                            <h3>Money back gurantee</h3>
                        </a>
                        <p>Shall open divide a one</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="flaticon-truck"></i>
                            <h3>Free Delivery</h3>
                        </a>
                        <p>Shall open divide a one</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="flaticon-support"></i>
                            <h3>Alway support</h3>
                        </a>
                        <p>Shall open divide a one</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-feature">
                        <a href="#" class="title">
                            <i class="flaticon-blockchain"></i>
                            <h3>Secure payment</h3>
                        </a>
                        <p>Shall open divide a one</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature Area -->

    <section class="feature_product_area section_gap_bottom_custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2><span>Featured product</span></h2>
                        <p>Top Featured Products</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @forelse($featured_products as $product)
                    @php
                        $originalPrice = 0;

                         if ($product->discount_percentage != 0){
                           $originalPrice = round($product->price * 100 /(100 - $product->discount_percentage),0);
                         }

                           $fullProductName = $product->name;
                           $productDetailsUrl = route('front-end.product-details', $product->id);

                           // Message text with product name and line break
                           $whatsappMessage = 'Hello, I want to purchase: *' . $fullProductName . '*';

                           // Append URL on a new line using %0A
                           $whatsappMessage .= '. Here is the product link: ' . $productDetailsUrl;
                    @endphp
                    <div class="col-lg-4 col-md-6">
                        <div class="single-product">
                            <div class="product-img">
                                <img class="img-fluid w-100"
                                     src="{{ asset('storage/' . ($product->images->first()?->image_url ?? 'placeholder.jpg')) }}"
                                     alt=""/>
                                <div class="p_icon w-100">
                                    <a target="_blank"
                                       href="https://api.whatsapp.com/send?phone=254791397770&text={{ urlencode($whatsappMessage) }}">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    <a href="{{ route('front-end.product-details',$product->id) }}">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-btm">
                                <a href="#" class="d-block">
                                    <h4>{{ $product->name }}</h4>
                                </a>
                                <div class="mt-3">
                                    <span class="mr-4">KES {{ $product->price }}</span>
                                    @if($originalPrice != 0)
                                        <del>KES {{ $originalPrice }}</del>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p style="text-align:center"> No Featured Products Found</p>
                @endforelse

            </div>
        </div>
    </section>

    <section class="feature_product_area section_gap_bottom_custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2><span>Latest product</span></h2>
                        <p>Latest Products</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @forelse($latest_products as $product)
                    @php
                        $originalPrice = 0;

                         if ($product->discount_percentage != 0){
                           $originalPrice = round($product->price * 100 /(100 - $product->discount_percentage),0);
                         }

                           $fullProductName = $product->name;
                           $productDetailsUrl = route('front-end.product-details', $product->id);

                           // Message text with product name and line break
                           $whatsappMessage = 'Hello, I want to purchase: *' . $fullProductName . '*';

                           // Append URL on a new line using %0A
                           $whatsappMessage .= '. Here is the product link: ' . $productDetailsUrl;
                    @endphp
                    <div class="col-lg-4 col-md-6">
                        <div class="single-product">
                            <div class="product-img">
                                <img class="img-fluid"
                                     src="{{ asset('storage/' . ($product->images->first()?->image_url ?? 'placeholder.jpg')) }}"
                                     alt="Product Image"/>
                                <div class="p_icon w-100">
                                    <a target="_blank"
                                       href="https://api.whatsapp.com/send?phone=254791397770&text={{ urlencode($whatsappMessage) }}">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    <a href="{{ route('front-end.product-details',$product->id) }}">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-btm">
                                <a href="#" class="d-block">
                                    <h4>{{ $product->name }}</h4>
                                </a>
                                <div class="mt-3">
                                    <span class="mr-4">KES {{ $product->price }}</span>
                                    @if($originalPrice != 0)
                                        <del>KES {{ $originalPrice }}</del>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p style="text-align:center"> No Latest Products Found</p>
                @endforelse
            </div>
        </div>
    </section>

    <section class="offer_area">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-6 text-start">
                    <div class="offer_content">
                        <h3 class="text-uppercase mb-40">Wonderful Deals</h3>
                        <h2 class="text-uppercase">UPTO 30% off</h2>
                        <a href="{{ route('front-end.shop',0) }}" class="main_btn mb-20 mt-5">Discover Now</a>
                        <p style="color:white;">Limited Time Offer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="new_product_area section_gap_top section_gap_bottom_custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2><span>new products</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="new_product">
                        <h5 class="text-uppercase">Latest Products</h5>
                        <h3 class="text-uppercase">{{ $latest_products->first()?->name ?? 'N/A' }}</h3>
                        <div class="product-img">
                            <img class="img-fluid"
                                 src="{{ asset('storage/' . ($latest_products->first()?->images->first()?->image_url ?? 'placeholder.jpg')) }}"
                                 alt=""/>
                        </div>
                        <h4>KES {{ $latest_products->first()?->price ?? 'N/A'  }}</h4>
                        <a href="{{ route('front-end.shop',0 ) ?? 'N/A'  }}"
                           class="main_btn">SHOP NOW</a>
                    </div>
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="row">
                        @forelse($latest_products as $product)
                            @php
                                $originalPrice = 0;
                                if ($product->discount_percentage != 0){
                                  $originalPrice = round($product->price * 100 /(100 - $product->discount_percentage),0);
                                }

                                $fullProductName = $product->name;
                                $productDetailsUrl = route('front-end.product-details', $product->id);

                                // Message text with product name and line break
                                $whatsappMessage = 'Hello, I want to purchase: *' . $fullProductName . '*';

                                // Append URL on a new line using %0A
                                $whatsappMessage .= '. Here is the product link: ' . $productDetailsUrl;
                            @endphp
                            <div class="col-lg-6 col-md-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <img class="img-fluid"
                                             src="{{ asset('storage/' . ($product->images->first()?->image_url ?? 'placeholder.jpg')) }}"
                                             alt="Product Image"/>
                                        <div class="p_icon w-100">
                                            <a target="_blank"
                                               href="https://api.whatsapp.com/send?phone=254791397770&text={{ urlencode($whatsappMessage) }}">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                            <a href="{{ route('front-end.product-details', $product->id) }}">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm">
                                        <a href="#" class="d-block">
                                            <h4>{{ $product->name }}</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">KES {{ $product->price }}</span>
                                            @if($originalPrice != 0)
                                                <del>KES {{ $originalPrice }}</del>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p style="text-align: center;">No Products Found</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================ Inspired Product Area =================-->
    <section class="inspired_product_area section_gap_bottom_custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2><span>SHOP BY CATEGORY</span></h2>
                        <p>Shop By Categories Here</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @forelse($categories as $category)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <div class="product-img">
                                <img class="img-fluid w-100" src="{{ asset('storage/' . $category->image_url) }}"
                                     alt=""/>
                                <div class="p_icon w-100">
                                    <a href="{{ route('front-end.shop',$category->id ?? 0) }}">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-btm">
                                <a href="#" class="d-block">
                                    <h4>{{ $category->name }}</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No Categories Found</p>
                @endforelse
            </div>
        </div>
    </section>
</div>
<!--end page content-->




