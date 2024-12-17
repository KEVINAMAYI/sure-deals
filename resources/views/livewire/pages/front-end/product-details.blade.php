<?php

use App\Models\CallBack;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\Deal;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.front-end')] class extends Component {

    use LivewireAlert;

    public $product;
    public $first_name;
    public $last_name;
    public $phone_number;

    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
        ];
    }

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function createCallBack()
    {
        $this->validate();

        DB::beginTransaction();
        try {
            CallBack::create([
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'phone_number' => $this->phone_number
            ]);

            $this->reset(['first_name', 'last_name', 'phone_number']);
            $this->dispatch('close-modal');

            DB::commit();
            $this->alert('success', 'CallBack was requested Successfully');

        } catch (Exception $exception) {
            DB::rollBack();
            $this->alert('error', 'CallBack request failed');
        }

    }


} ?>
<!--start page content-->
<div class="page-content">

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
                            <div class="carousel-inner">
                                @foreach($product->images as $index => $image)
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <img
                                            class="d-block w-100"
                                            src="{{ asset('storage/' . $image->image_url) }}"
                                            alt="Slide {{ $index + 1 }}"
                                        />
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    @php
                        $fullProductName = $product->name;
                        $productDetailsUrl = route('front-end.product-details', $product->id);

                        // Message text with product name and line break
                        $whatsappMessage = 'Hello, I want to purchase: *' . $fullProductName . '*';

                        // Append URL on a new line using %0A
                        $whatsappMessage .= '. Here is the product link: ' . $productDetailsUrl;
                    @endphp
                    <div class="s_product_text">
                        <h3>{{ $product->name }}</h3>
                        <h2>KES {{ $product->price }}</h2>
                        <ul class="list">
                            <li>
                                <a class="active" href="#">
                                    <span>Category</span> : {{ $product->category->name }}</a
                                >
                            </li>
                            <li>
                                <a href="#"> <span>Availibility</span> : In Stock</a>
                            </li>
                        </ul>
                        <p>
                            {{ $product->description }}
                        </p>
                        <div style="margin-top:-20px; margin-bottom:20px;" class="review_box">
                            <div class="row total_rate">
                                <div class="col-6">
                                    <div style="text-align:center; background-color: rgb(246,246,246);"
                                         class="pt-2 pb-2 box_total">
                                        <h5 style="font-size:20px;  font-weight:bold;">Overall Ratings</h5>
                                        <h4 style="font-size:50px;  color:rgb(113,205,20); font-weight:bold;">5.0</h4>
                                        <h6>(30 Reviews)</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_area">
                            <a class="main_btn"
                               target="_blank"
                               href="https://api.whatsapp.com/send?phone=254791397770&text={{ urlencode($whatsappMessage) }}">
                                <i class="fab fa-whatsapp"></i>
                                Buy on Whatsapp
                            </a>
                            <a class="main_btn" style="background-color:#71CD14; color:white; cursor: pointer; "
                               data-bs-toggle="modal"
                               data-bs-target="#callBackModal">
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
                    {{ $product->description }}
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

    <div wire:ignore.self class="modal fade" id="callBackModal" tabindex="-1" aria-labelledby="callBackModalLabel"
         aria-hidden="true">
        <form wire:submit="createCallBack">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="callBackModalLabel">Request CallBack</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" id="first_name" class="form-control" wire:model="first_name">
                                    @error('first_name')
                                    <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" id="last_name" class="form-control" wire:model="last_name">
                                    @error('last_name')
                                    <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="phone_number" class="form-label">Phone Number</label>
                                    <input type="text" id="phone_number" class="form-control" wire:model="phone_number">
                                    @error('phone_number')
                                    <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!--================End Product Description Area =================-->
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script>
        window.addEventListener('close-modal', event => {
            $('#callBackModal').modal('hide');
            $('#sendEmailModal').modal('hide');
            location.reload();
        });
    </script>
@endpush
<!--end page content-->



