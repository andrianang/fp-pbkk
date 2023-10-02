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
        Schema::table('penerbangan', function (Blueprint $table) {
            // Define the column with a default value and make it not nullable
            $table->integer('bagasi')->default(20)->nullable()->change();
            $table->integer('bagasi_cabin')->default(7)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
