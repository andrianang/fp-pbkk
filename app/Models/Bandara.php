<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bandara extends Model
{
    use HasFactory;

    protected $table ='bandara';
    protected $guarded = ['id'];

    public function rute(){
        return $this->hasMany(Rute::class);
    }

    public function kota(){
        return $this->belongsTo(Kota::class);
    }
}
