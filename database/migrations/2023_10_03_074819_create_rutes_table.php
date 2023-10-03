<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rutes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->time('durasi_penerbangan')->notNullable(); 
            $table->dateTime('keberangkatan')->notNullable();
            $table->dateTime('kedatangan')->notNullable();
            $table->foreignId('bandara_id_tujuan')->notNullable();
            $table->foreignId('bandara_id_asal')->notNullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rutes');
    }
};
