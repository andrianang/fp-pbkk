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
<<<<<<< HEAD
        [   'nama_provinsi' => 'Sumatra Utara',
            'id_negara' => 1    
        ],
        
        [   'nama_provinsi' => 'Sulawesi Selatan',
            'id_negara' => 1    
        ],

        [   'nama_provinsi' => 'Bali',
            'id_negara' => 1    
        ],

        [   'nama_provinsi' => 'Riau',
            'id_negara' => 1    
        ],

        [   'nama_provinsi' => 'Jawa Barat',
=======
        [   'nama_provinsi' => 'DKI Jakarta',
            'id_negara' => 1    
        ],
        
            
        [   'nama_provinsi' => 'Jawa Timur',
            'id_negara' => 1    
        ],

        [   'nama_provinsi' => 'Jawa Tengah',
>>>>>>> 1eefb173ec858114943c6efbfa11177b67fb618c
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
