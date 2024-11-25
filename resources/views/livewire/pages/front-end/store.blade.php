<?php

use App\Models\Carousel;
use App\Models\Category;
use App\Models\Deal;
use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.front-end')] class extends Component {

    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }


} ?>

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <link rel="stylesheet" href="front-end/css/main.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
@endpush

<!--start page content-->
<div class="page-content">
    <main class="main">
        <!-- Services Section -->
        <section id="services" class="services section light-background">
            <div class="container">
                <div class="row gy-4">
                    @foreach($categories as $category)
                        <div class="col-lg-4 col-md-6 mt-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item  position-relative">
                                <div class="icon">
                                    <i class="fa-solid {{ $category->icon }}"></i>
                                </div>
                                <h3>{{ $category->name }}</h3>
                                <p>{{ $category->description }}</p>
                                <a href="{{ route('front-end.shop') }}" class="btn-success mt-2 btn ">SHOP NOW<i
                                        class="ml-1 bi bi-arrow-right"></i></a>
                            </div>
                        </div><!-- End Service Item -->
                    @endforeach
                </div>
            </div>
        </section>
    </main>
</div>
<!--end page content-->



