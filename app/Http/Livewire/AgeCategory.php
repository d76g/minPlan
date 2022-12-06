<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Session\Session;
use Livewire\Component;
use Illuminate\Support\Facades\App;

class AgeCategory extends Component
{
    public string $age = '';
    public $currentStep = 1;
    protected $listeners = ['translate'];
    public string $country = '';

    protected $rules = [
        'age' => ['required'],
    ];
    public function updated($propertyName)
    {
        $this->validateOnly(
            $propertyName,
            [
                'age' => ['required'],
            ]
        );
    }

    public function stepBack()
    {
        if ($this->currentStep == 1) {
            $this->currentStep = 1;
        } else {
            $this->currentStep--;
        }
    }

    public function nextStep()
    {
        $this->validate(
            [
                'age' => ['required'],
            ],
            [
                'age.required' => 'Please select your age range...'
            ]
        );
        $this->currentStep++;
    }

    public function translate()
    {
        Session()->get('locale');
        return back();
    }
    public function render()
    {
        return view('livewire.age-category')->layout('layouts.guest');
    }
}
//* To get the country
// , [
//     $this->country = session()->get('country'),
// ]