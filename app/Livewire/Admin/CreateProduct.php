<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;

class CreateProduct extends Component
{
    public $prod_name, $prod_price, $prod_desc, $brand_id, $category_id, $prod_images, $prod_sizes, $prod_flavors;

    public function store()
    {
        $validatedData = $this->validate([
            'prod_name' => 'required|string',
            'prod_price' => 'required|numeric',
            'brand_id' => 'required',
            'category_id' => 'required',
            'prod_desc' => 'nullable',
            'prod_images' => 'nullable|string',
            'prod_sizes' => 'nullable|array',
            'prod_flavors' => 'nullable|array',
        ]);

        $validatedData['prod_sizes'] = json_encode($validatedData['prod_sizes']);
        $validatedData['prod_flavors'] = json_encode($validatedData['prod_flavors']);

        Product::create($validatedData);

        session()->flash('message', 'Product successfully created.');

        return redirect()->to('/backoffice');
    }

    public function render()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('livewire.admin.create-product', compact('brands', 'categories'));
    }
}
