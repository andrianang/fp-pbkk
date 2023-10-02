<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbangan extends Model
{
    use HasFactory;

    
    protected $table = 'penerbangan';
    protected $guarded = ['id'];

    public function maskapai(){
        return $this->belongsTo(Maskapai::class);
    }

    public function rute(){
        return $this->belongsTo(Rute::class);
    }
}
