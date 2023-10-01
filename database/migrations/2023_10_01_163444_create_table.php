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
        Schema::create('negara', function (Blueprint $table) {
            $table->id()->notNullable();
            $table->string('nama_negara')->notNullable();
            $table->timestamps();
        });

        Schema::create('provinsi', function (Blueprint $table) {
            $table->id()->notNullable();
            $table->string('nama_provinsi')->notNullable();
            $table->foreignId('id_negara')->notNullable();;
            $table->timestamps();
        });

        Schema::create('maskapai', function (Blueprint $table) {
            $table->id()->notNullable();
            $table->string('nama_maskapai')->notNullable();
            $table->timestamps();
        });
        
        Schema::create('kota', function (Blueprint $table) {
            $table->id()->notNullable();
            $table->string('nama_kota')->notNullable();
            $table->foreignId('provinsi_id')->notNullable();
            $table->timestamps();
        });
//      

        Schema::create('bandara', function (Blueprint $table) {
            $table->id()->notNullable();
            $table->string('nama_bandara')->notNullable();
            $table->foreignId('kota_id')->notNullable();
            $table->timestamps();
        });

        Schema::create('rute', function (Blueprint $table) {
            $table->id()->notNullable();
            $table->time('durasi_penerbangan')->notNullable(); 
            $table->dateTime('keberangkatan')->notNullable();
            $table->dateTime('kedatangan')->notNullable();
            $table->foreignId('bandara_id_keberangkatan')->notNullable();
            $table->foreignId('bandara_id_kedatangan')->notNullable();
            $table->timestamps();
        });

        Schema::create('penerbangan', function (Blueprint $table) {
            $table->id()->notNullable();
            $table->foreignId('maskapai_id')->notNullable();
            $table->foreignId('rute_id')->notNullable();
            $table->integer('harga')->notNullable();
            $table->integer('bagasi')->notNullable();
            $table->integer('bagasi_cabin')->notNullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table');
    }
};
