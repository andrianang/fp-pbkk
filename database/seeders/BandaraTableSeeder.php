<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bandara;
use Illuminate\Support\Facades\DB;

class BandaraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $airports = [
            [
                'nama_bandara' => 'Bandara Internasional Kualanamu',
                'kota_id' => 4,
                'kode' => 'KNO',
            ],


            [
                'nama_bandara' => 'Bandara Internasional Sultan Hasanuddin',
                'kota_id' => 5,
                'kode' => 'UPG'
            ],

            [
                'nama_bandara' => 'Bandara Internasional Husein Sastranegara',
                'kota_id' => 8,
                'kode' => 'BDO'
            ],

            [
                'nama_bandara' => 'Bandara Sultan Syarif Qasim II',
                'kota_id' => 7,
                'kode' => 'PKU
            '
            ],

            [
                'nama_bandara' => 'Bandara Internasional Ngurah Rai',
                'kota_id' => 6,
                'kode' => 'DPS'
            ],

        ];

        DB::table('bandaras')->insert($airports);

        // foreach ($airports as $airport) {
        //     $airport_i = new Bandara();
        //     $airport_i->nama_bandara = $airport['nama_bandara'];
        //     $airport_i->kota_id = $airport['id_kota'];
        //     $airport_i->kode = $airport['kode'];
        //     $airport_i->save();
        // } //
    }
}