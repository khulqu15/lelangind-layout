<?php

namespace App\Http\Livewire\Dashboard\Table;

use App\Models\CategoryProduct;
use App\Models\Product;
use Livewire\Component;

class Products extends Component
{

    public $categories;
    public $products;
    public $name;
    public $category;

    public function render()
    {
        $name = '%'.$this->name.'%';
        $this->categories = CategoryProduct::all();
        $query = Product::query();
        if($this->name != '') {
            $this->products = $query->where('name', 'like', $name);
        }
        if($this->category != '') {
            $this->products = $query->where('category_id', $this->category);
        }
        $this->products = $query->orderBy('id', 'DESC')->get();
        return view('livewire.dashboard.table.products');
    }

    public function deleteData($id)
    {
        return redirect()->route('dashboard.product')->with('success', 'Dihapus');
    }
}
