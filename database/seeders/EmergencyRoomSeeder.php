<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use phpDocumentor\Reflection\Types\Null_;

class EmergencyRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('emergencyrooms')->insert([
            [
                'name' => 'Caredoc Treatment Centre Carlow',
                'address' => 'District Hospital Carlow Health Service Complex, Athy Road',
                'post_code' => 'R93 V603',
                'city' => 'Carlow',
                'country' => 'Ireland',
                'latitude' => '52.8426144',
                'longitude' => '-6.9290847',
                'phone' => '0818300365',
                'email' => 'info@caredoc.ie',
                'website' => 'https://www.caredoc.ie/',
            ],
            [
                'name' => 'Shannon Doc Ennis',
                'address' => 'Ennis Day Hospital, Gort Road, Ennis',
                'post_code' => 'V95 XP38',
                'city' => 'Clare',
                'country' => 'Ireland',
                'latitude' => '52.708258',
                'longitude' => '-9.317114',
                'phone' => '0818123500',
                'email' => 'null',
                'website' => 'http://www.shannondoc.ie'
            ],
        ]);
    }
}
