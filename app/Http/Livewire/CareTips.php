<?php

namespace App\Http\Livewire;

use App\Models\Emergencyroom;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;

class CareTips extends Component
{
    public $currentStep = 1;
    protected $listeners = ['translate'];

    public function render()
    {
        return view('livewire.care-tips', [
            'emergency_data' => Emergencyroom::select('phone', 'website', 'country', 'name')->where('country', session()->get('country'))->get()
        ])->layout('layouts.guest');
    }

    public function nextStep()
    {
        $this->currentStep++;
    }
    public function stepBack()
    {
        if ($this->currentStep == 1) {
            $this->currentStep = 1;
        } else {
            $this->currentStep--;
        }
    }
    public string $language = '';
    public function translate()
    {
        Session()->get('locale');
        return back();
    }
}
