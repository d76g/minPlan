<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;

class LangTrasns extends Component
{
    public string $language = '';

    public function render()
    {
        return view('livewire.lang-trasns');
    }

    public function change()
    {
        App::setLocale($this->language);
        session()->put('locale', $this->language);
        return back();
    }
}
