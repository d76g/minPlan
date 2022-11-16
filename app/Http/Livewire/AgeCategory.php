<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;

class AgeCategory extends Component
{
    public string $age = '';
    public $currentStep = 1;

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
                'age.required' => 'Please Select your age range...'
            ]
        );
        $this->currentStep++;
    }

    public string $language = '';
    public function translate()
    {

        App::setLocale($this->language);
        session()->put('locale', $this->language);
        return back();
    }
    public function render()
    {
        return view('livewire.age-category');
    }
}
