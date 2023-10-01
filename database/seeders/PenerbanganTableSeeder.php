<?php

namespace Database\Seeders;

use App\Models\Penerbangan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenerbanganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tickets = [
            [   'maskapai_id' => 1,
                'rute_id' => 1, 
                'harga' => 769000,
                'bagasi' => 20,
                'bagasi_cabin' => 7,
            ],
            
            [   'maskapai_id' => 2,
                'rute_id' => 2, 
                'harga' => 329000,
                'bagasi' => 20,
                'bagasi_cabin' => 7,
            ],
    
            [   'maskapai_id' => 3,
                'rute_id' => 3, 
                'harga' => 549000,
                'bagasi' => 20,
                'bagasi_cabin' => 7,
            ],
        ];
    
            foreach($tickets as $ticket){
                $ticket_i = new Penerbangan();
                $ticket_i->maskapai_id = $ticket['maskapai_id'];
                $ticket_i->rute_id = $ticket['rute_id'];
                $ticket_i->harga = $ticket['harga'];
                $ticket_i->bagasi = $ticket['bagasi'];
                $ticket_i->bagasi_cabin = $ticket['bagasi_cabin'];
                $ticket_i->save();
            }
        }
}

