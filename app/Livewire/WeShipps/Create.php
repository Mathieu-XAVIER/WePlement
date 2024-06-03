<?php

namespace App\Livewire\WeShipps;

use App\Models\Weshipp;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{
    public $we_name;
    public $start_date;
    public $end_date;
    public $subscription_type = 'weflex';
    public  $product_ids = [1,2,3];
    public $recurrence_frequency = 1 ;

    public function mount()
    {
        if (!Auth::check()) {
            redirect(route('login'));
        }
    }

    public function render()
    {
        return view('livewire.we-shipps.create');
    }

    public function submit()
    {
        $userId = auth()->id();
        if (!$userId) {
            session()->flash('error', 'User is not authenticated.');
            return redirect(route('login'));
        }

        $this->validate([
            'we_name' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'subscription_type' => 'nullable',
            'product_ids' => 'nullable',
            'recurrence_frequency' => 'nullable|integer',
        ]);

        Weshipp::create([
            'we_name' => $this->we_name,
            'user_id' => auth()->id(),
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'subscription_type' => $this->subscription_type,
            'product_ids' => $this->product_ids,
            'recurrence_frequency' => $this->recurrence_frequency,
        ]);

        session()->flash('message', 'WeShipp created.');

        return redirect(route('weshipps.listing'));
    }

    public function toggleCreateForm()
    {
        $this->redirect(route('weshipps.listing
        '));
    }
}
