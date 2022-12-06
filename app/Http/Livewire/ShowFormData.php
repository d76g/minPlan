<?php

namespace App\Http\Livewire;

use App\Models\minPlanFormModel;
use Livewire\Component;

class ShowFormData extends Component
{
    public function render()
    {
        return view('livewire.show-form-data', [
            'responces' => minPlanFormModel::all(),
        ]);
    }
}
