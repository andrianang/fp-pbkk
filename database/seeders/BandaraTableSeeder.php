<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bandara;
class BandaraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $airports = [
        [   'nama_bandara' => 'Bandar Udara Internasional Soekarno-Hatta',
            'id_kota' => 1,
            'kode' => 'CGK',    
        ],
        
            
        [   'nama_bandara' => 'Bandar Udara Internasional Juanda',
            'id_kota' => 2,
            'kode' => 'SUB'    
        ],

        [   'nama_bandara' => 'Bandar Udara Internasional Jenderal Ahmad Yani',
            'id_kota' => 3,
            'kode' => 'SRG'    
        ],
            
        ];

        foreach($airports as $airport){
            $airport_i = new Bandara();
            $airport_i->nama_bandara = $airport['nama_bandara'];
            $airport_i->kota_id = $airport['id_kota'];
            $airport_i->kode = $airport['kode'];
            $airport_i->save();
        }//
    }
}
