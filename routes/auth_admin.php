<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\BidanController;
use App\Models\Booking;

Route::prefix('admin')->middleware(['guest:admin'])->group(function() {
    Route::get('qwertyuiop/qazwsxedcrfvtgbyhnujmikolp', [RegisterController::class, 'create'])->name('admin.register');
    Route::post('qwertyuiop/qazwsxedcrfvtgbyhnujmikolp', [RegisterController::class, 'store']);

    Route::get('login', [LoginController::class, 'create'])->name('admin.login'); // Rute admin.login didefinisikan di sini
    Route::post('login', [LoginController::class, 'store']);
});

Route::prefix('admin')->middleware(['auth:admin', 'role:admin'])->group(function() {
    Route::get('dashboard', function() {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('pengumuman', [PengumumanController::class, 'index'])->name('admin.pengumuman');
    Route::get('pengumumans/create', [PengumumanController::class, 'create'])->name('admin.pengumumans.create');
    Route::post('pengumumans', [PengumumanController::class, 'store'])->name('admin.pengumumans.store');
    Route::get('pengumuman/{pengumuman}/edit', [PengumumanController::class, 'edit'])->name('admin.pengumumans.edit');
    Route::put('pengumuman/edit/{pengumuman}', [PengumumanController::class, 'update'])->name('admin.pengumumans.update');
    Route::delete('pengumuman/{pengumuman}', [PengumumanController::class, 'destroy'])->name('admin.pengumuman.destroy');

    Route::post('logout', [LoginController::class, 'destroy'])->name('admin.logout');

    Route::get('jadwal', [JadwalController::class, 'index'])->name('admin.jadwal');
    Route::get('jadwal/create', [JadwalController::class, 'create'])->name('admin.jadwals.create');
    Route::post('jadwals', [JadwalController::class, 'store'])->name('admin.jadwals.store');
    Route::delete('jadwal/{jadwal}', [JadwalController::class, 'destroy'])->name('admin.jadwal.destroy');
    Route::get('pasien', [BookingController::class, 'index'])->name('admin.pasien');
    Route::delete('pasien/{booking}', [BookingController::class, 'destroy'])->name('admin.pasien.destroy');

    Route::get('bidan', [BidanController::class, 'index'])->name('admin.bidan');
    Route::get('bidan/create', [BidanController::class, 'create'])->name('admin.bidan.create');
    Route::post('bidan/store', [BidanController::class, 'store'])->name('admin.bidan.store');
    Route::get('bidan/{bidan}/edit', [BidanController::class, 'edit'])->name('admin.bidan.edit');
    Route::put('bidan/edit/{bidan}', [BidanController::class, 'update'])->name('admin.bidan.update');
    Route::delete('bidan/destroy/{bidan}', [BidanController::class, 'destroy'])->name('admin.bidan.destroy');
});