<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

route::get('/', [GuestController::class, 'beranda'])->name('beranda');
route::get('/tentang', [GuestController::class, 'about'])->name('tentang');



// Route::get('/about', function () {
//     return view('guest/tentang');
// })->name('tentang');
