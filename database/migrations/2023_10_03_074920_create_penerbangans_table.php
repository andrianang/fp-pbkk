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
        Schema::create('penerbangans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('maskapai_id')->notNullable();
            $table->foreignId('rute_id')->notNullable();
            $table->integer('harga')->notNullable();
            $table->integer('bagasi')->default(20)->notNullable();
            $table->integer('bagasi_cabin')->default(7)->notNullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerbangans');
    }
};
