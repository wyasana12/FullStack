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
        Schema::create('bidan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jamKerjaMulai');
            $table->string('jamKerjaSelesai');
            $table->enum('status', ['sedia', 'tidak tersedia']);
            $table->timestamps();
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
