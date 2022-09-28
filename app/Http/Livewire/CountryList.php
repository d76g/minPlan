<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CountryList extends Component
{
    public string $country = '';
    public function mount($country)
    {
        $this->country = $country;
    }
    public function getCountry()
    {

        $this->validate([
            'country' => ['required'],
        ]);
        $this->currentStep = 4;
    }
    public function render()
    {
        return view('livewire.country-list');
    }
}
