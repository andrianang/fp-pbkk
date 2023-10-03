<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $table = 'provinsis';
    protected $guarded = ['id'];

    public function negara(){
        return $this->belongsTo(Negara::class);
    }

    public function kota(){
        return $this->hasMany(Kota::class);
    }
}
