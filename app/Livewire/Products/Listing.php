<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class Listing extends Component
{
    const BRAND_OPTIONS = [
        'bulk' => 'Bulk',
        'myprotein' => 'MyProtein',
        'nutripure' => 'Nutripure',
        'nutrimuscle' => 'Nutrimuscle',
        'onatera' => 'Onatera',
    ];

    public $brand = [
        'bulk' => false,
        'myprotein' => false,
        'nutripure' => false,
        'nutrimuscle' => false,
        'onatera' => false,
    ];

    public $search;

    protected $listeners = ['searchUpdated' => 'updateSearch'];

    public function render()
    {
        $selectedBrands = array_keys(array_filter($this->brand));

        $products = Product::when(!empty($selectedBrands), function ($query) use ($selectedBrands) {
            return $query->whereIn('prod_marque', $selectedBrands);
        })
            ->where('prod_nom', 'like', '%' . $this->search . '%')
            ->get();

        return view('livewire.products.listing', [
            'products' => $products,
            'search' => $this->search,
        ]);
    }

    public function updatedSearch($search)
    {
        $this->search = $search;
    }
}
