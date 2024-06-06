<?php

namespace App\Livewire\Profile;

use App\Models\DeliveryAdress;
use Livewire\Component;

class AdressListing extends Component
{
    public $newAdress = [
        'adress' => '',
        'city' => '',
        'zip_code' => '',
        'country' => '',
    ];

    public $showForm = false;

    public function addAdress()
    {
        $this->validate([
            'newAdress.adress' => 'required',
            'newAdress.city' => 'required',
            'newAdress.zip_code' => 'required',
            'newAdress.country' => 'required',
        ]);

        DeliveryAdress::create(array_merge($this->newAdress, ['user_id' => auth()->id()]));

        $this->newAdress = [
            'adress' => '',
            'city' => '',
            'zip_code' => '',
            'country' => '',
        ];

        $this->showForm = false;

        session()->flash('message', 'Adresse ajoutée avec succès.');
    }

    public function render()
    {
        return view('livewire.profile.adress-listing', [
            'adresses' => DeliveryAdress::where('user_id', auth()->id())->get()
        ]);
    }

    public function handleForm()
    {
        $this->showForm = true;
    }

    public function deleteAdress($id)
    {
        DeliveryAdress::find($id)->delete();
        session()->flash('message', 'Adresse supprimée avec succès.');
    }
}
