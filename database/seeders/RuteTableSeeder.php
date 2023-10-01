<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rute;
use Carbon\Carbon;
use Carbon\CarbonInterval;
class RuteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Routes = [
            [   'keberangkatan' => Carbon::create(2023, 10, 15, 14, 30, 0),
                'kedatangan' => Carbon::create(2023, 10, 15, 15, 40, 0), 
                'durasi_penerbangan' => CarbonInterval::hours(1)->minutes(10)->format('%H:%I:%S'),
                'bandara_id_asal' => 1,
                'bandara_id_tujuan' => 2,
            ],
            
            [   'keberangkatan' => Carbon::create(2023, 10, 15, 14, 30, 0),
                'kedatangan' => Carbon::create(2023, 10, 15, 15, 40, 0), 
                'durasi_penerbangan' => CarbonInterval::hours(1)->minutes(10)->format('%H:%I:%S'),
                'bandara_id_asal' => 2,
                'bandara_id_tujuan' => 3,
            ],
    
            [   'keberangkatan' => Carbon::create(2023, 10, 15, 14, 30, 0),
                'kedatangan' => Carbon::create(2023, 10, 15, 15, 40, 0), 
                'durasi_penerbangan' => CarbonInterval::hours(1)->minutes(10)->format('%H:%I:%S'),
                'bandara_id_asal' => 1,
                'bandara_id_tujuan' => 3,
            ],
        ];
    
            foreach($Routes as $route){
                $route_i = new Rute();
                $route_i->keberangkatan = $route['keberangkatan'];
                $route_i->kedatangan = $route['kedatangan'];
                $route_i->durasi_penerbangan = $route['durasi_penerbangan'];
                $route_i->bandara_id_asal = $route['bandara_id_asal'];
                $route_i->bandara_id_tujuan = $route['bandara_id_tujuan'];
                $route_i->save();
            }
        }
}
