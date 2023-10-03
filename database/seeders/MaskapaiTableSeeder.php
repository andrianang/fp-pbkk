<?php

namespace Database\Seeders;

use App\Models\Maskapai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaskapaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $airlines = [
            ['nama_maskapai' => 'Wings Air'],
            ['nama_maskapai' => 'Garuda Indonesia'],
            ['nama_maskapai' => 'Citilink'],
            ['nama_maskapai' => 'Batik Air'],

        ];

        DB::table('maskapais')->insert($airlines);

        // foreach($brands as $brand){
        //     $brand_i = new Maskapai();
        //     $brand_i->nama_maskapai = $brand['nama_maskapai'];
        //     $brand_i->save();
        // }
    }
}