<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    use HasFactory;

    protected $table = "rute";
    protected $guarded = ['id'];

    public function bandara_asal(){
<<<<<<< HEAD
        return $this->belongsTo(Bandara::class, 'bandara_id_asal');
    }
    
    public function bandara_tujuan(){
        return $this->belongsTo(Bandara::class, 'bandara_id_tujuan');
=======
        return $this->belongsTo(Bandara::class);
    }
    
    public function bandara_tujuan(){
        return $this->belongsTo(Bandara::class);
>>>>>>> 1eefb173ec858114943c6efbfa11177b67fb618c
    }
}
