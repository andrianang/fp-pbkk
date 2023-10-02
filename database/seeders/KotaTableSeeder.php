<?php

namespace Database\Seeders;
use App\Models\Kota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            [   'nama_kota' => 'Medan',
                'id_provinsi' => 4 
            ],
            
            [   'nama_kota' => 'Makassar',
                'id_provinsi' => 5    
            ],
    
            [   'nama_kota' => 'Denpasar',
                'id_provinsi' => 6    
            ],

            [   'nama_kota' => 'Pekanbaru',
                'id_provinsi' => 7     
            ],
            [   'nama_kota' => 'Bandung',
                'id_provinsi' => 8    
            ],
        ];
        
            foreach($cities as $city){
                $city_i = new Kota();
                $city_i->nama_kota = $city['nama_kota'];
                $city_i->provinsi_id = $city['id_provinsi'];
                $city_i->save();
            }
        }
}
