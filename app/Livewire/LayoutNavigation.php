<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class LayoutNavigation extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
        }

    public function render()
    {
        return view('livewire.layout-navigation', [
            'categories' => $this->categories
        ]);
    }
}
