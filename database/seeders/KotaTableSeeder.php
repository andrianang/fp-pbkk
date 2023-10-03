<?php

namespace Database\Seeders;

use App\Models\Kota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            [
                'nama_kota' => 'Medan',
                'provinsi_id' => 4
            ],

            [
                'nama_kota' => 'Makassar',
                'provinsi_id' => 5
            ],

            [
                'nama_kota' => 'Denpasar',
                'provinsi_id' => 6
            ],

            [
                'nama_kota' => 'Pekanbaru',
                'provinsi_id' => 7
            ],
            [
                'nama_kota' => 'Bandung',
                'provinsi_id' => 8
            ],
        ];

        DB::table('kotas')->insert($cities);

        // foreach($cities as $city){
        //     $city_i = new Kota();
        //     $city_i->nama_kota = $city['nama_kota'];
        //     $city_i->provinsi_id = $city['id_provinsi'];
        //     $city_i->save();
        // }
    }
}