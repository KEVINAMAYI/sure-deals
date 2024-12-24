<?php

use App\Models\ProductVariation;
use App\Models\Rating;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Volt\Component;

new class extends Component {

    use LivewireAlert;

    public $name;
    public $email;
    public $ratings;
    public $comments;
    public $product_id;

    public function mount($product_id)
    {
        $this->product_id = $product_id;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'ratings' => 'required',
            'comments' => 'required',
            'email' => 'required',
            'product_id' => 'required'
        ];
    }

    public function addReview()
    {

        $this->validate();

        DB::beginTransaction();
        try {

            Rating::create([
                'product_id' => $this->product_id,
                'name' => $this->name,
                'ratings' => $this->ratings,
                'email' => $this->email,
                'comments' => $this->comments
            ]);
            DB::commit();

            $this->resetExcept('product_id');
            $this->dispatch('get-ratings', $this->product_id);
            $this->alert('success', 'Ratings added successfully');

        } catch (Exception $exception) {

            DB::rollBack();
            $this->alert('error', 'There was an error while adding product rating');

        }

    }

}; ?>

<div class="col-lg-6">
    <div class="review_box">
        <h4>Add a Review</h4>
        <form wire:submit="addReview">
            <div class="col-md-12">
                <div class="form-group">
                    <input
                        type="text"
                        wire:model="name"
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Your Full name"
                    />
                    @error('name')
                    <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input
                        type="email"
                        wire:model="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="Email Address"
                    />
                    @error('email')
                    <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input
                        type="number"
                        wire:model="ratings"
                        id="ratings"
                        class="form-control"
                        min="1"
                        max="5"
                        step="1"
                        placeholder="Enter rating (1-5)"
                    />
                    @error('ratings')
                    <p class="text-danger text-sm pt-2 mb-0"> {{ $message }} </p>
                    @enderror
                </div>
            </div>


            <div class="col-md-12">
                <div class="form-group">
                        <textarea
                            wire:model="comments"
                            class="form-control"
                            name="message"
                            id="message"
                            rows="5"
                            placeholder="Comments"
                        ></textarea>
                    @error('comments')
                    <p class="text-danger text-xs pt-1"> {{ $message }} </p>
                    @enderror
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

