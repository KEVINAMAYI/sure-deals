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

    public function mount()
    {
        $this->products = Product::all();
        $this->categories = Category::orderByRaw('LENGTH(name) ASC')->get();

    }

} ?>

<!--start page content-->
<div class="page-content">
    <!--================Home Banner Area =================-->
        <div class="mb-4 mt-3 align-items-center">
            <div class="container">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </div>
        </div>


    <!--================End Home Banner Area =================-->

    <!--================Category Product Area =================-->
    <section  class="cat_product_area mb-3">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="product_top_bar">
                        <div class="left_dorp">
                            <select class="sorting">
                                <option value="1">Ascending Order</option>
                                <option value="2">Descending Order</option>
                            </select>
                            <select class="show">
                                <option value="4">Show 50</option>
                                <option value="4">Show 100</option>
                                <option value="4">Show 200</option>
                            </select>
                        </div>
                    </div>

                    <div class="latest_product_inner">
                        <div class="row">
                            @forelse($products as $product)
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <img
                                                class="card-img"
                                                src="{{ asset('storage/' . $product->images->first()->image_url) }}"
                                                alt=""
                                            />
                                            <div class="p_icon">
                                                <a href="#">
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
                                                {{--                                                <del>$35.00</del>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>No Categories Found</p>
                            @endforelse

                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Browse Categories</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    @forelse($categories as $category)
                                        <li>
                                            <a href="#">{{ $category->name }}</a>
                                        </li>
                                    @empty
                                        <li>
                                            <a href="#">No Categories...</a>
                                        </li>
                                    @endforelse
                                </ul>
                            </div>
                        </aside>

                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Color Filter</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <li>
                                        <a href="#">Black</a>
                                    </li>
                                    <li>
                                        <a href="#">Black Leather</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">Black with red</a>
                                    </li>
                                    <li>
                                        <a href="#">Gold</a>
                                    </li>
                                    <li>
                                        <a href="#">Spacegrey</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>

                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Price Filter</h3>
                            </div>
                            <div class="widgets_inner">
                                <div class="range_item">
                                    <div id="slider-range"></div>
                                    <div class="">
                                        <label for="amount">Price : </label>
                                        <input type="text" id="amount" readonly/>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->
</div>
<!--end page content-->



