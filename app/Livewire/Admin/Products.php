<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;

class Products extends Component
{
    public $products, $prod_name, $prod_price, $prod_desc, $prod_images, $prod_sizes, $prod_flavors, $brand_id, $category_id, $product_id;
    public $isOpen = 0;

    public function render()
    {
        $this->products = Product::all();
        return view('livewire.admin.products');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields(){
        $this->prod_name = '';
        $this->prod_price = '';
        $this->prod_desc = '';
        $this->prod_images = '';
        $this->prod_sizes = '';
        $this->prod_flavors = '';
        $this->brand_id = '';
        $this->category_id = '';
        $this->product_id = '';
    }

    public function store()
    {
        $this->validate([
            'prod_name' => 'required',
            'prod_price' => 'required',
            'brand_id' => 'required',
            'category_id' => 'required',
        ]);

        Product::updateOrCreate(['id' => $this->product_id], [
            'prod_name' => $this->prod_name,
            'prod_price' => $this->prod_price,
            'prod_desc' => $this->prod_desc,
            'prod_images' => $this->prod_images,
            'prod_sizes' => $this->prod_sizes,
            'prod_flavors' => $this->prod_flavors,
            'brand_id' => $this->brand_id,
            'category_id' => $this->category_id
        ]);

        session()->flash('message',
            $this->product_id ? 'Product Updated Successfully.' : 'Product Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $this->product_id = $id;
        $this->prod_name = $product->prod_name;
        $this->prod_price = $product->prod_price;
        $this->prod_desc = $product->prod_desc;
        $this->prod_images = $product->prod_images;
        $this->prod_sizes = $product->prod_sizes;
        $this->prod_flavors = $product->prod_flavors;
        $this->brand_id = $product->brand_id;
        $this->category_id = $product->category_id;

        $this->openModal();
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        session()->flash('message', 'Product Deleted Successfully.');
    }
}
