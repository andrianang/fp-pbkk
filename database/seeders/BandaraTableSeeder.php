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
<<<<<<< HEAD
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
=======
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
>>>>>>> 1eefb173ec858114943c6efbfa11177b67fb618c
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
