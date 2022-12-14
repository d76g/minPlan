<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Session\Session;

class LangTranslate extends Component
{
    public function render()
    {
        return view('livewire.lang-translate')->layout('layouts.guest');
    }
    public string $language = '';

    public function translate()
    {
        App::setLocale($this->language);
        session()->put('locale', $this->language);
        $this->emit('translate');
        return back();
    }
}
