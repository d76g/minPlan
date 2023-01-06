<?php

namespace App\Imports;

use App\Models\Emergencyroom;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ContactsImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Emergencyroom([
            'name' => $row['name'],
            'address' => $row['address'],
            'post_code' => $row['post_code'],
            'city' => $row['city'],
            'country' => $row['country'],
            'latitude' => $row['latitude'],
            'longitude' => $row['longitude'],
            'phone' => $row['phone'],
            'email' => $row['email'],
            'website' => $row['website'],
        ]);
    }
}
