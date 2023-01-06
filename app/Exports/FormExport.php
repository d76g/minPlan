<?php

namespace App\Exports;

use App\Models\minPlanFormModel;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class FormExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        return view('livewire.show-form-data', [
            'responces' => minPlanFormModel::paginate(10),
        ]);
    }
}
