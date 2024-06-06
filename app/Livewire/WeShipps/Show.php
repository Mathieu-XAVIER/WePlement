<?php

namespace App\Livewire\WeShipps;

use Livewire\Component;
use App\Models\WeShipp;

class Show extends Component
{
    public $weshipp;

    public function mount($weshippId)
    {
        $this->weshipp = WeShipp::find($weshippId);
    }

    public function render()
    {
        return view('livewire.we-shipps.show');
    }

    public function removeProduct($productId)
    {
        $this->weshipp->product_ids = array_diff($this->weshipp->product_ids, [$productId]);
        $this->weshipp->save();
    }
}
