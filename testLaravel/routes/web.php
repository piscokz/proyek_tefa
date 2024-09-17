<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

route::get('/', [GuestController::class, 'beranda'])->name('beranda');
route::get('/tentang', [GuestController::class, 'tentang'])->name('tentang');
route::get('/kabarlensa', [GuestController::class, 'kabarlensa'])->name('kabarlensa');
route::get('/kontak', [GuestController::class, 'kontak'])->name('kontak');
route::get('/pplg', [GuestController::class, 'pplg'])->name('pplg');
route::get('/ps', [GuestController::class, 'ps'])->name('ps');
route::get('/tbsm', [GuestController::class, 'tbsm'])->name('tbsm');
route::get('/tkro', [GuestController::class, 'tkro'])->name('tkro');
route::get('/tkj', [GuestController::class, 'tkj'])->name('tkj');
route::get('/bkk', [GuestController::class, 'bkk'])->name('bkk');
route::get('/tc', [GuestController::class, 'tc'])->name('tc');
route::get('/pkl', [GuestController::class, 'pkl'])->name('pkl');



Route::get('/test', function () {
    return view('layout/template');
});
