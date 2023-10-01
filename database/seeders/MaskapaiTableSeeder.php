<?php

namespace Database\Seeders;
use App\Models\Maskapai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaskapaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['nama_maskapai' => 'Wings Air'],
            ['nama_maskapai' => 'Garuda Indonesia'],
            ['nama_maskapai' => 'Citilink'],
            ['nama_maskapai' => 'Batik Air'],
            
        ];

        foreach($brands as $brand){
            $brand_i = new Maskapai();
            $brand_i->nama_maskapai = $brand['nama_maskapai'];
            $brand_i->save();
        }
    }
}
