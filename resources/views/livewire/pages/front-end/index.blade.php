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

<div class="page-content">

    <!--================Home Banner Area =================-->
    <section class="home_banner_area mb-40">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content row">
                    <div class="col-lg-12">
                        <p class="sub text-uppercase">SURE DEALS</p>
                        <h3><span>One</span> Stop <br/>For All <span>Construction Materials</span></h3>
                        <a class="main_btn mt-20" href="{{ route('front-end.shop',0 ) ?? 'N/A'  }}">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                                     src="{{ asset('storage/' . ($latest_products->first()?->images->first()?->image_url ?? 'placeholder.jpg')) }}"
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
                                <img class="img-fluid w-100"
                                     src="{{ asset('storage/' . ($latest_products->first()?->images->first()?->image_url ?? 'placeholder.jpg')) }}"
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
                    <p style="text-align:center"> No Latest Products Found</p>
                @endforelse
            </div>
        </div>
    </section>

    <!--================ Offer Area =================-->
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
    <!--================ End Offer Area =================-->

    <!--================ New Product Area =================-->
    <section class="new_product_area section_gap_top section_gap_bottom_custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2><span>new products</span></h2>
                        <p>Bring called seed first of third give itself now ment</p>
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
                                        <img class="img-fluid w-100"
                                             src="{{ asset('storage/' . $product->images->first()->image_url) }}"
                                             alt=""/>
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
    <!--================ End New Product Area =================-->

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




