<?php

use App\Http\Controllers\BidanController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PengumumanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard',[BidanController::class, 'userindex']
)->middleware(['auth:web', 'role:user'])->name('dashboard');

Route::middleware(['auth:web', 'role:user'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('pasien/confirmation', function () {
        return view('pasien.confirmation');
    })->name('pasien.confirmation');
    Route::get('pasien/create', [BookingController::class, 'create'])->name('pasien.create');
    Route::post('pasien', [BookingController::class, 'store'])->name('pasien.store');
    Route::get('pasien/show', [BookingController::class, 'show'])->name('booking');
    Route::get('pasien/{booking}/edit', [BookingController::class, 'edit'])->name('pasien.edit');
    Route::put('pasien/edit/{booking}', [BookingController::class, 'update'])->name('pasien.update');
    Route::delete('pasien/destroy/{booking}', [BookingController::class, 'destroy'])->name('pasien.destroy');
});
// web.php
Route::get('/jadwal-available', [JadwalController::class, 'available'])->name('jadwal.available');
Route::get('pengumuman', [PengumumanController::class, 'show'])->name('pengumuman');

require __DIR__ . '/auth.php';
require __DIR__ . '/auth_admin.php';
