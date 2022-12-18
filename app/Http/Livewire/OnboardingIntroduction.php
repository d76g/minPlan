<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;
use Illuminate\Contracts\Session\Session;

class OnboardingIntroduction extends Component
{
    public string $country = '';
    public $currentStep = 1;

    protected $listeners = ['translate'];

    protected $rules = [
        'country' => ['required']
    ];
    public function updated($propertyName)
    {
        $this->validateOnly(
            $propertyName,
            [
                'country' => ['required']
            ]
        );
    }


    public function welcomePage()
    {
        $this->currentStep = 2;
        session()->put('introPageCurrentStep', $this->currentStep);
    }
    public function infoPage()
    {
        $this->currentStep = 3;
        session()->put('introPageCurrentStep', $this->currentStep);
    }
    public function getCountry()
    {

        $this->validate([
            'country' => ['required'],
        ]);
        session(['country' => $this->country]);
        $this->currentStep = 4;
        session()->put('introPageCurrentStep', $this->currentStep);
    }


    public function update($property)
    {
        $this->validateOnly($property);
    }
    public function goBack()
    {
        $currentStep = session()->get('introPageCurrentStep');
        if ($currentStep == 1) {
            $currentStep = 1;
        } else {
            $currentStep--;
        }
        session()->put('introPageCurrentStep', $currentStep);
    }
    public string $language = '';
    public function translate()
    {
        Session()->get('locale');
        return back();
    }
    public function render()
    {
        return view('livewire.onboarding-introduction')->layout('layouts.guest');
    }
}
