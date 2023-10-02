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
            [   'maskapai_id' => 3,
                'rute_id' => 4, 
                'harga' => 769000,
                'bagasi' => 20,
                'bagasi_cabin' => 7,
            ],
            
            [   'maskapai_id' => 2,
                'rute_id' => 5, 
                'harga' => 459000,
                'bagasi' => 20,
                'bagasi_cabin' => 7,
            ],
    
            [   'maskapai_id' => 1,
                'rute_id' => 6, 
                'harga' => 549000,
                'bagasi' => 20,
                'bagasi_cabin' => 7,
            ],

            [   'maskapai_id' => 4,
                'rute_id' => 7, 
                'harga' => 1349000,
                'bagasi' => 20,
                'bagasi_cabin' => 7,
            ],

            [   'maskapai_id' => 2,
                'rute_id' => 8, 
                'harga' => 2049000,
                'bagasi' => 20,
                'bagasi_cabin' => 7,
            ],
            
            [   'maskapai_id' => 2,
                'rute_id' => 9, 
                'harga' => 2349000,
                'bagasi' => 20,
                'bagasi_cabin' => 7,
            ],

            [   'maskapai_id' => 1,
                'rute_id' => 10, 
                'harga' => 1549000,
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

