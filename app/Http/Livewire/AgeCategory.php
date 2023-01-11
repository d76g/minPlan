<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AgeCategory extends Component
{
    protected $listeners = ['translate'];
    public function translate()
    {
        Session()->get('locale');
        return back();
    }
    public function render()
    {
        return view(
            'livewire.age-category'
        )->layout('layouts.guest');
    }
}
