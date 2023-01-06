<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Emergencyroom;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Contracts\Session\Session;

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
        return view(
            'livewire.age-category',
            [
                'emergency_data' => DB::table('emergencyrooms')->select('phone', 'website', 'name')
                    ->where('country', session()->get('country'))
                    ->where('website', '!=', 'NULL')
                    ->take(2)
                    ->get(),
            ]
        )->layout('layouts.guest');
    }
}
