<?php

namespace App\Exports;

use App\Models\Emergencyroom;
use Maatwebsite\Excel\Concerns\FromCollection;

class ContactsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Emergencyroom::all();
    }
}
