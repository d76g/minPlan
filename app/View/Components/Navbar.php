<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\App;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public string $language = '';
    public function __construct()
    {
        App::setLocale($this->language);
        session()->put('locale', $this->language);
        return back();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar');
    }
}
