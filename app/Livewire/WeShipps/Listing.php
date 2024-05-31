<?php

namespace App\Livewire\WeShipps;

use App\Models\Weshipp;
use Livewire\Component;

class Listing extends Component
{
    public $showCreateForm = false;

    public function render()
    {
        $weShipps = Weshipp::where('user_id', auth()->id())->get();

        return view('livewire.we-shipps.listing', [
            'weShipps' => $weShipps
        ]);
    }

    public function toggleCreateForm()
    {
        $this->showCreateForm = true;
    }
}
