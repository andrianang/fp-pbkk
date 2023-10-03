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
        Schema::create('bandaras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_bandara')->notNullable();
            $table->string('kode')->notNullable();
            $table->foreignId('kota_id')->notNullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bandaras');
    }
};
