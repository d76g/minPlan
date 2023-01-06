<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Exports\FormExport;
use App\Models\minPlanFormModel;
use Maatwebsite\Excel\Facades\Excel;

class ShowFormData extends Component
{
    public function export()
    {
        return Excel::download(new FormExport, 'onboarding-form.csv');
    }
    public function render()
    {
        return view('livewire.show-form-data', [
            'responces' => minPlanFormModel::paginate(10),
        ]);
    }
}
