<?php

namespace App\Livewire\Products;

use App\Models\Weshipp;
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
        return view('livewire.products.show', [
            'weshipps' => Weshipp::where('user_id', auth()->id())->get(),
        ]);
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

    public function addToWeShipp($weshippId, $productId)
    {
        $weshipp = WeShipp::find($weshippId);
        $productIds = is_string($weshipp->product_ids) ? json_decode($weshipp->product_ids, true) : $weshipp->product_ids;
        $productIds[] = $productId;
        $weshipp->product_ids = json_encode($productIds);
        $weshipp->save();

        session()->flash('message', 'Le produit a été ajouté avec succès.');

        return redirect()->to('/produits');
    }
}
