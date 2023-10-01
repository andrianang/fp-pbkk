<?php

namespace Database\Seeders;
use App\Models\Provinsi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinsiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $provincies = [
        [   'nama_provinsi' => 'DKI Jakarta',
            'id_negara' => 1    
        ],
        
            
        [   'nama_provinsi' => 'Jawa Timur',
            'id_negara' => 1    
        ],

        [   'nama_provinsi' => 'Jawa Tengah',
            'id_negara' => 1    
        ],
    ];

        foreach($provincies as $province){
            $province_i = new Provinsi();
            $province_i->nama_provinsi = $province['nama_provinsi'];
            $province_i->id_negara = $province['id_negara'];
            $province_i->save();
        }
    }
}
