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
            [   'keberangkatan' => Carbon::create(2023, 10, 16, 06, 30, 0),
                'kedatangan' => Carbon::create(2023, 10, 16, 7, 40, 0), 
                'durasi_penerbangan' => CarbonInterval::hours(0)->minutes(50)->format('%H:%I:%S'),
                'bandara_id_asal' => 1,
                'bandara_id_tujuan' => 4,
            ],
            
            [   'keberangkatan' => Carbon::create(2023, 10, 17, 11, 30, 0),
                'kedatangan' => Carbon::create(2023, 10, 17, 12, 30, 0), 
                'durasi_penerbangan' => CarbonInterval::hours(1)->minutes(0)->format('%H:%I:%S'),
                'bandara_id_asal' => 7,
                'bandara_id_tujuan' => 1,
            ],
    
            [   'keberangkatan' => Carbon::create(2023, 10, 18, 13, 40, 0),
                'kedatangan' => Carbon::create(2023, 10, 18, 14, 40, 0), 
                'durasi_penerbangan' => CarbonInterval::hours(1)->minutes(0)->format('%H:%I:%S'),
                'bandara_id_asal' => 2,
                'bandara_id_tujuan' => 8,
            ],

            [   'keberangkatan' => Carbon::create(2023, 10, 19, 11, 50, 0),
                'kedatangan' => Carbon::create(2023, 10, 19, 14, 40, 0), 
                'durasi_penerbangan' => CarbonInterval::hours(2)->minutes(50)->format('%H:%I:%S'),
                'bandara_id_asal' => 4,
                'bandara_id_tujuan' => 2,
            ],
            
            [   'keberangkatan' => Carbon::create(2023, 10, 19, 14, 40, 0),
                'kedatangan' => Carbon::create(2023, 10, 19, 17, 30, 0), 
                'durasi_penerbangan' => CarbonInterval::hours(2)->minutes(50)->format('%H:%I:%S'),
                'bandara_id_asal' => 2,
                'bandara_id_tujuan' => 4,
            ],

            [   'keberangkatan' => Carbon::create(2023, 10, 19, 10, 30, 0),
                'kedatangan' => Carbon::create(2023, 10, 19, 13, 30, 0), 
                'durasi_penerbangan' => CarbonInterval::hours(3)->minutes(00)->format('%H:%I:%S'),
                'bandara_id_asal' => 4,
                'bandara_id_tujuan' => 6,
            ],
            [   'keberangkatan' => Carbon::create(2023, 10, 20, 10, 30, 0),
                'kedatangan' => Carbon::create(2023, 10, 20, 12, 30, 0), 
                'durasi_penerbangan' => CarbonInterval::hours(2)->minutes(00)->format('%H:%I:%S'),
                'bandara_id_asal' => 2,
                'bandara_id_tujuan' => 8,
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
