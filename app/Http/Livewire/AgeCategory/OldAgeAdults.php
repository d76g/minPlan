<?php

namespace App\Http\Livewire\AgeCategory;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class OldAgeAdults extends Component
{
    public $currentStep = 1;
    protected $listeners = ['translate'];

    public function stepBack()
    {
        if ($this->currentStep == 1) {
            $this->currentStep = 1;
        } else {
            $this->currentStep--;
            session()->put('OldAgePageCurrentStep', $this->currentStep);
        }
    }

    public function nextStep()
    {
        $this->currentStep++;
        session()->put('OldAgePageCurrentStep', $this->currentStep);
    }
    public function translate()
    {
        Session()->get('locale');
        return back();
    }
    public function render()
    {
        return view('livewire.age-category.old-age-adults', [
            'emergency_data' => DB::table('emergencyrooms')->select('phone', 'website', 'name')
                ->where('country', session()->get('country'))
                ->where('website', '!=', 'NULL')
                ->take(2)
                ->get(),
        ])->layout('layouts.guest');
    }
}
