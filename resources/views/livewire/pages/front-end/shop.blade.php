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
    public $search;
    public $selectedCategory = null;
    public $selectedColor = null;
    public $sortOrder = 'asc';
    public $category_id = 0;


    public function mount($category_id = 0)
    {
        $this->getProducts($category_id);
        $this->categories = Category::orderByRaw('LENGTH(name) ASC')->get();

    }

    public function updatedSearch()
    {
        $this->getProducts();
    }

    public function updatedSortOrder($value)
    {
        $this->sortOrder = $value;
        $this->getProducts();
    }

    public function getProducts($category_id = 0)
    {
        $query = Product::orderBy('created_at', $this->sortOrder);

        // Check if category_id is not 0
        if ($category_id != 0 && $category_id !== null) {
            $query->where('category_id', $category_id); // Filter by category_id
            $this->selectedCategory = Category::find($category_id)->name;
        }

        // Check if search exists
        if ($this->search) {
            $query->where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('description', 'like', '%' . $this->search . '%')
                    ->orWhereHas('category', function ($query) {
                        $query->where('name', 'like', '%' . $this->search . '%');
                    });
            });
        }

        // Load products with relationships
        $this->products = $query->with(['category', 'images', 'tags'])->get();
    }


    public function filterByCategory($categoryName = null)
    {
        $this->selectedCategory = $categoryName;
        $this->search = $categoryName ?: '';
        $this->getProducts(); // Refresh products
    }

    public function filterByColor($color = null)
    {
        $this->selectedColor = $color;
        $this->search = $color ?: '';
        $this->getProducts();
    }


} ?>
@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <link rel="stylesheet" href="front-end/css/main.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css" rel="stylesheet">
@endpush

<!--start page content-->
<div class="page-content">
    <!--================Home Banner Area =================-->
    <div class="mb-4 mt-3 align-items-center">
        <div class="container">
            <input class="form-control mr-sm-2" name="search" wire:model.live="search" type="search"
                   placeholder="Search" aria-label="Search">
        </div>
    </div>


    <!--================End Home Banner Area =================-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area mb-3">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="product_top_bar">
                        <div class="left_dorp">
                            <!-- Sorting Dropdown -->
                            <select class="sorting" wire:model="sortOrder">
                                <option value="asc">Ascending Order</option>
                                <option value="desc">Descending Order</option>
                            </select>

                            <!-- Show Items per Page Dropdown -->
                            {{--                            <select class="show" wire:model="itemsPerPage">--}}
                            {{--                                <option value="50">Show 50</option>--}}
                            {{--                                <option value="100">Show 100</option>--}}
                            {{--                                <option value="200">Show 200</option>--}}
                            {{--                            </select>--}}
                        </div>
                    </div>


                    <div class="latest_product_inner">
                        <div class="row">
                            @forelse($products as $product)
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
                                            <img
                                                class="card-img"
                                                src="{{ asset('storage/' . $product->images->first()->image_url) }}"
                                                alt=""
                                            />
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
                                <p>No Products Found</p>
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
                                    <li class="{{ is_null($selectedCategory) ? 'active' : '' }}">
                                        <a wire:click="filterByCategory" style="cursor: pointer;">All</a>
                                    </li>
                                    @forelse($categories as $category)
                                        <li class="{{ $selectedCategory === $category->name ? 'active' : '' }}">
                                            <a wire:click="filterByCategory('{{ $category->name }}')"
                                               style="cursor: pointer;">
                                                {{ $category->name }}
                                            </a>
                                        </li>
                                    @empty
                                        <li>
                                            <a style="cursor: pointer;">No Categories...</a>
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
                                    <!-- All Option -->
                                    <li class="{{ is_null($selectedColor) ? 'active' : '' }}">
                                        <a wire:click="filterByColor(null)" style="cursor: pointer;">All</a>
                                    </li>
                                    <!-- Black -->
                                    <li class="{{ $selectedColor === 'black' ? 'active' : '' }}">
                                        <a wire:click="filterByColor('black')" style="cursor: pointer;">Black</a>
                                    </li>
                                    <!-- Black Leather -->
                                    <li class="{{ $selectedColor === 'black leather' ? 'active' : '' }}">
                                        <a wire:click="filterByColor('black leather')" style="cursor: pointer;">Black
                                            Leather</a>
                                    </li>
                                    <!-- Red -->
                                    <li class="{{ $selectedColor === 'red' ? 'active' : '' }}">
                                        <a wire:click="filterByColor('red')" style="cursor: pointer;">Red</a>
                                    </li>
                                    <!-- Gold -->
                                    <li class="{{ $selectedColor === 'gold' ? 'active' : '' }}">
                                        <a wire:click="filterByColor('gold')" style="cursor: pointer;">Gold</a>
                                    </li>
                                    <!-- Space Grey -->
                                    <li class="{{ $selectedColor === 'spacegrey' ? 'active' : '' }}">
                                        <a wire:click="filterByColor('spacegrey')"
                                           style="cursor: pointer;">Spacegrey</a>
                                    </li>
                                </ul>

                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->
</div>


