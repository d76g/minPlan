<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Emergencyroom;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session\Session;

class CareTips extends Component
{
    public $currentStep = 1;
    protected $listeners = ['translate'];

    public function render()
    {

        return view('livewire.care-tips', [
            'emergency_data' => DB::table('emergencyrooms')
                ->select('phone', 'website', 'name')
                ->where('country', session()->get('country'))
                ->where('website', '!=', 'NULL')
                ->take(2)
                ->get(),
            'phoneNumber' => Emergencyroom::select('phone')->where('country', session()->get('country'))->first(),
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
