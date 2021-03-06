<?php

namespace App\Http\Livewire\Components;

use App\Models\LikeProduct;
use Livewire\Component;

class CardProduct extends Component
{

    public $product;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.components.card-product');
    }

    public function like($product, $user)
    {
        $like = LikeProduct::where('product_id', $product)->where('user_id', $user)->first();
        if($like != null) {
            $like->delete();
        } else {
            $like = new LikeProduct();
            $like->product_id = $product;
            $like->user_id = $user;
            $like->save();
        }
    }
}
