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
Schema::create('bookings', function (Blueprint $table) {
    $table->id();
    $table->enum('layanan', ['umum', 'kb', 'kia', 'persalinan']);
    $table->string('nama');
    $table->string('nik');
    $table->date('tanggalLahir');
    $table->enum('jenisKelamin', ['L', 'P']);
    $table->string('phone');
    $table->text('keluhan');
    $table->date('tanggalPesan');
    $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
    
    // Ubah jadwal_id ini agar merujuk secara eksplisit ke 'jadwal_id' pada tabel 'jadwal'
    $table->unsignedBigInteger('jadwal_id');
    $table->foreign('jadwal_id')->references('jadwal_id')->on('jadwal')->onDelete('cascade');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
