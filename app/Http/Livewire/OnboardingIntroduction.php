<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Session\Session;
use Livewire\Component;
use Illuminate\Support\Facades\App;

class OnboardingIntroduction extends Component
{
    public string $age = '';
    public string $country = '';
    public $currentStep = 1;

    protected $listeners = ['translate'];

    protected $rules = [
        'age' => ['required'],
        'country' => ['required']
    ];
    public function updated($propertyName)
    {
        $this->validateOnly(
            $propertyName,
            [
                'age' => ['required'],

                'country' => ['required']
            ]
        );
    }


    public function welcomePage()
    {
        $this->currentStep = 2;
    }
    public function infoPage()
    {
        $this->currentStep = 3;
    }
    public function getCountry()
    {

        $this->validate([
            'country' => ['required'],
        ]);
        $this->currentStep = 4;
    }


    public function update($property)
    {
        $this->validateOnly($property);
    }
    public function goBack()
    {
        if ($this->currentStep == 1) {
            $this->currentStep = 1;
        } else {
            $this->currentStep--;
        }
    }

    public function nextStep()
    {
        $this->currentStep++;
    }

    public function clearForm()
    {
        $this->country = '';
        $this->currentStep = 1;
    }

    public string $language = '';
    public function translate()
    {
        Session()->get('locale');
        return back();
    }
    public function render()
    {
        return view('livewire.onboarding-introduction');
    }
}
