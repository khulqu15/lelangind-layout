<?php

namespace App\Http\Livewire\Dashboard\Table;

use App\Models\CategoryProduct;
use App\Models\Product;
use Livewire\Component;

class Products extends Component
{

    public $categories;
    public $products;

    public function render()
    {
        $this->categories = CategoryProduct::all();
        $this->products = Product::paginate(6);
        return view('livewire.dashboard.table.products');
    }
}
