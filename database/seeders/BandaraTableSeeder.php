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
        [   'nama_bandara' => 'Bandara Internasional Kualanamu',
            'id_kota' => 4,
            'kode' => 'KNO',    
        ],
        
            
        [   'nama_bandara' => 'Bandara Internasional Sultan Hasanuddin',
            'id_kota' => 5,
            'kode' => 'UPG'    
        ],

        [   'nama_bandara' => 'Bandara Internasional Husein Sastranegara',
            'id_kota' => 8,
            'kode' => 'BDO'    
        ],

        [   'nama_bandara' => 'Bandara Sultan Syarif Qasim II',
            'id_kota' => 7,
            'kode' => 'PKU
            '    
        ],
        
        [   'nama_bandara' => 'Bandara Internasional Ngurah Rai',
            'id_kota' => 6,
            'kode' => 'DPS'    
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
