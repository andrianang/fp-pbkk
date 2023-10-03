<?php

namespace Database\Seeders;

use App\Models\Negara;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NegaraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['nama_negara' => 'Indonesia'],
            ['nama_negara' => 'Malaysia'],
            ['nama_negara' => 'Singapore'],

        ];

        DB::table('negaras')->insert($countries);

        // foreach($countries as $country){
        //     $country_i = new Negara();
        //     $country_i->nama_negara = $country['nama_negara'];
        //     $country_i->save();
        // }
    }
}