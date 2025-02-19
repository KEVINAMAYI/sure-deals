<?php

use App\Models\CallBack;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\Deal;
use App\Models\Product;
use App\Models\Rating;
use App\Models\User;
use App\Notifications\Inquiry;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Volt\Component;

new #[Layout('layouts.front-end')] class extends Component {

    use LivewireAlert;

    public $product;
    public $first_name;
    public $last_name;
    public $phone_number;
    public $product_ratings;
    public $name;
    public $subject;
    public $email;
    public $content;

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->getRatingsData($product->id);

    }

    #[On('get-ratings')]
    public function getRatingsData($product_id)
    {
        $this->product_ratings = Rating::where('product_id', $product_id)
            ->where('status', 'approved')->get();
    }

    public function createCallBack()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
        ]);

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


    public function send_email()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'content' => 'required|string'
        ]);

        try {

            $user = User::where('email', 'kevinamayi20@gmail.com')->first();
            $user->notify(new Inquiry($this->name, $this->email, $this->subject, $this->content));

            $this->alert('success', 'Email was sent successfully');

        } catch (Exception $exception) {
            $this->alert('error', $exception->getMessage());
        }

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
                                <i class="bi bi-whatsapp"></i>
                                Buy on Whatsapp
                            </a>
                            <a class="main_btn" style="background-color:#71CD14; color:white; cursor: pointer; "
                               data-bs-toggle="modal"
                               data-bs-target="#callBackModal">
                                <i class="bi bi-phone"></i>
                                Request CallBack
                            </a>
                            <a style="background-color:#71CD14; color:white; cursor: pointer; " class="mt-2 main_btn"
                               data-bs-toggle="modal"
                               data-bs-target="#sendEmailModal">
                                <i class="bi bi-envelope"></i>
                                Send Email
                            </a>


                            <a style="background-color:#71CD14; color:white; cursor: pointer; "
                               href="tel:+254791397770" data-bs-toggle="tooltip" data-bs-placement="top"
                               title="+254 791 397 770"
                               class="mt-2 main_btn">
                                <i class="bi bi-phone"></i>
                                Call Us
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
                            </div>
                            <div class="mt-3 review_list">
                                @foreach($product_ratings as $product_rating)
                                    <div class="review_item">
                                        <div class="media">
                                            <div
                                                style="padding-top:20px; color: white; border-radius:50%; text-align: center; background-color:{{ $product_rating->generateRandomColor() }}; width:65px; height:65px; font-size: 35px; font-weight:bold;">
                                                {{ ucfirst(substr($product_rating->name, 0, 1)) }}
                                            </div>
                                            <div class="ml-3 media-body">
                                                <h4>{{ ucfirst($product_rating->name) }}</h4>
                                                @if($product_rating->ratings == '1')
                                                    <i class="fa fa-star"></i>
                                                @elseif($product_rating->ratings == '2')
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                @elseif($product_rating->ratings == '3')
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                @elseif($product_rating->ratings == '4')
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                @elseif($product_rating->ratings == '5')
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                @endif
                                            </div>
                                        </div>
                                        <p>
                                            {{ $product_rating->comments }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        @livewire('pages.front-end.components.create-ratings', ['product_id' =>
                        $product->id])

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

    <div wire:ignore.self class="modal fade" id="sendEmailModal" tabindex="-1" aria-labelledby="sendEmailModalLabel"
         aria-hidden="true">
        <form wire:submit="send_email">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="sendEmailModalLabel">Send Email</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">Subject</label>
                                    <input type="text" id="subject" class="form-control" wire:model="subject">
                                    @error('subject')
                                    <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" id="name" class="form-control" wire:model="name">
                                    @error('name')
                                    <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" class="form-control" wire:model="email">
                                    @error('email')
                                    <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="mb-3">
                                    <label for="content" class="form-label">Message</label>
                                    <textarea rows="6" id="content" class="form-control"
                                              wire:model="content"></textarea>
                                    @error('email')
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            window.addEventListener('close-modal', event => {
                $('#callBackModal').modal('hide');
                $('#sendEmailModal').modal('hide');
                location.reload();
            });
        });
    </script>
@endpush
<!--end page content-->



