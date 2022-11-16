<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

class LangTranslate extends Component
{
    public function render()
    {
        return view('livewire.lang-translate');
    }
    public string $language = '';
    public function translate()
    {
        App::setLocale($this->language);
        session()->put('locale', $this->language);
        return back();
    }
}
