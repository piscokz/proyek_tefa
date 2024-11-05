<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PelangganController,
    KendaraanController,
    SparepartController,
    ServisController,
};

// Rute untuk halaman utama
Route::get('/', function () {
    return view('home');
});

// Rute untuk Pelanggan
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
Route::get('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');
Route::post('/pelanggan', [PelangganController::class, 'store'])->name('pelanggan.store');
Route::get('/pelanggan/{id}', [PelangganController::class, 'show'])->name('pelanggan.show');
Route::get('/pelanggan/{id}/edit', [PelangganController::class, 'edit'])->name('pelanggan.edit');
Route::put('/pelanggan/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
Route::delete('/pelanggan/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');

// Rute untuk Kendaraan
Route::get('/kendaraan', [KendaraanController::class, 'index'])->name('kendaraan.index');
Route::get('/kendaraan/create', [KendaraanController::class, 'create'])->name('kendaraan.create');
Route::post('/kendaraan', [KendaraanController::class, 'store'])->name('kendaraan.store');
Route::get('/kendaraan/{id}', [KendaraanController::class, 'show'])->name('kendaraan.show');
Route::get('/kendaraan/{id}/edit', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
Route::put('/kendaraan/{id}', [KendaraanController::class, 'update'])->name('kendaraan.update');
Route::delete('/kendaraan/{id}', [KendaraanController::class, 'destroy'])->name('kendaraan.destroy');

// Rute untuk Sparepart
Route::get('/sparepart', [SparepartController::class, 'index'])->name('sparepart.index');
Route::get('/sparepart/create', [SparepartController::class, 'create'])->name('sparepart.create');
Route::post('/sparepart', [SparepartController::class, 'store'])->name('sparepart.store');
Route::get('/sparepart/{id}', [SparepartController::class, 'show'])->name('sparepart.show');
Route::get('/sparepart/{id}/edit', [SparepartController::class, 'edit'])->name('sparepart.edit');
Route::put('/sparepart/{id}', [SparepartController::class, 'update'])->name('sparepart.update');
Route::delete('/sparepart/{id}', [SparepartController::class, 'destroy'])->name('sparepart.destroy');

// Rute untuk Servis
Route::get('/servis', [ServisController::class, 'index'])->name('servis.index');
Route::get('/servis/create', [ServisController::class, 'create'])->name('servis.create');
Route::post('/servis', [ServisController::class, 'store'])->name('servis.store');
Route::get('/servis/{id}', [ServisController::class, 'show'])->name('servis.show');
Route::get('/servis/{id}/edit', [ServisController::class, 'edit'])->name('servis.edit');
Route::put('/servis/{id}', [ServisController::class, 'update'])->name('servis.update');
Route::delete('/servis/{id}', [ServisController::class, 'destroy'])->name('servis.destroy');
