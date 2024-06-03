<?php

namespace App\Livewire\Products;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Listing extends Component
{
    use WithPagination;

    public $category;

    public $brand = [];

    public $search;

    protected $listeners = ['searchUpdated' => 'updateSearch'];

    public function mount($category_id = null)
    {
        $this->category = Category::find($category_id);

        $brands = Brand::all();
        foreach ($brands as $brand) {
            $this->brand[$brand->id] = false;
        }
    }

    public function render()
{
    $selectedBrands = array_keys(array_filter($this->brand));

    $products = Product::when(!empty($selectedBrands), function ($query) use ($selectedBrands) {
        return $query->whereIn('brand_id', $selectedBrands);
    })
        ->when($this->category, function ($query) {
            return $query->where('category_id', $this->category->id);
        })
        ->where('prod_name', 'like', '%' . $this->search . '%')
        ->paginate(8);

    $brands = Brand::all();

    return view('livewire.products.listing', [
        'products' => $products,
        'search' => $this->search,
        'brands' => $brands,
    ]);
}

    public function updatedSearch($search)
    {
        $this->search = $search;
    }
}
