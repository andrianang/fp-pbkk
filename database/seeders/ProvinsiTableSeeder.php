<?php

namespace Database\Seeders;

use App\Models\Provinsi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinsiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provincies = [
            [
                'nama_provinsi' => 'Sumatra Utara',
                'negara_id' => 1
            ],

            [
                'nama_provinsi' => 'Sulawesi Selatan',
                'negara_id' => 1
            ],

            [
                'nama_provinsi' => 'Bali',
                'negara_id' => 1
            ],

            [
                'nama_provinsi' => 'Riau',
                'negara_id' => 1
            ],

            [
                'nama_provinsi' => 'Jawa Barat',
                'negara_id' => 1
            ],
        ];

        DB::table('provinsis')->insert($provincies);

        // foreach ($provincies as $province) {
        //     $province_i = new Provinsi();
        //     $province_i->nama_provinsi = $province['nama_provinsi'];
        //     $province_i->id_negara = $province['id_negara'];
        //     $province_i->save();
        // }
    }
}