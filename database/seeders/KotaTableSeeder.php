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
            [   'nama_kota' => 'Jakarta',
                'id_provinsi' => 1    
            ],
            
                
            [   'nama_kota' => 'Surabaya',
                'id_provinsi' => 2    
            ],
    
            [   'nama_kota' => 'Semarang',
                'id_provinsi' => 3    
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
