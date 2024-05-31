<?php

namespace App\Livewire\Products;

use Livewire\Component;

class Show extends Component
{
    public $product;
    public $showModal = false;
    public $showCreateForm = false;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.products.show');
    }

    public function toggleModal()
    {
        $this->showModal = !$this->showModal;
    }

    public function toggleCreateForm()
    {
        $this->showModal = false;
        $this->showCreateForm = true;
    }
}
