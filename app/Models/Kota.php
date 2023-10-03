<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    
    protected $table ='kotas';
    protected $guarded = ['id'];

    public function provinsi(){
        return $this->belongsTo(Provinsi::class);
    }
    public function bandara(){
        return $this->hasMany(Bandara::class);
    }

    

}
