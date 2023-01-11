<?php

namespace App\Http\Livewire\AgeCategory;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class StepTwo extends Component
{
    public function render()
    {
        return view('livewire.age-category.step-two', [
            'emergency_data' => DB::table('emergencyrooms')->select('phone', 'website', 'name')
                ->where('country', session()->get('country'))
                ->where('website', '!=', 'NULL')
                ->take(2)
                ->get(),
        ])->layout('layouts.guest');
    }
}
