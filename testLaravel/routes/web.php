<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    GuestController,MajorController,NewsController,DashboardController
};

// Route::get('/', [GuestController::class, 'admin'])->name('admin');
Route::get('/', [GuestController::class, 'beranda'])->name('beranda');
Route::get('/tentang', [GuestController::class, 'tentang'])->name('tentang');
Route::get('/news/show', [GuestController::class, 'kabarlensa'])->name('kabarlensa');
Route::get('/kontak', [GuestController::class, 'kontak'])->name('kontak');
Route::get('/pplg', [GuestController::class, 'pplg'])->name('pplg');
Route::get('/ps', [GuestController::class, 'ps'])->name('ps');
Route::get('/tbsm', [GuestController::class, 'tbsm'])->name('tbsm');
Route::get('/tkro', [GuestController::class, 'tkro'])->name('tkro');
Route::get('/tkj', [GuestController::class, 'tkj'])->name('tkj');
Route::get('/bkk', [GuestController::class, 'bkk'])->name('bkk');
Route::get('/tc', [GuestController::class, 'tc'])->name('tc');
Route::get('/pkl', [GuestController::class, 'pkl'])->name('pkl');

// Route untuk tamu melihat berita
Route::get('/news', [NewsController::class, 'index'])->name('guest.news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('guest.news.show');

Route::prefix('admin')->group(function () {
    // Dashboard
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Major Routes
    Route::get('/major/create', [MajorController::class, 'create'])->name('major.create');
    Route::post('/major', [MajorController::class, "store"])->name('major.store');
    Route::get('/major', [MajorController::class, "index"])->name('major.index');
    Route::get('/major/{id}', [MajorController::class, "show"])->name('major.show');

    // News Routes
    Route::prefix('news')->group(function () {
        Route::get('/', [NewsController::class, 'adminIndex'])->name('admin.news.index');
        Route::get('/create', [NewsController::class, 'create'])->name('admin.news.create');
        Route::post('/', [NewsController::class, 'store'])->name('admin.news.store');
        Route::get('/{id}/edit', [NewsController::class, 'edit'])->name('admin.news.edit');
        Route::put('/{id}', [NewsController::class, 'update'])->name('admin.news.update');
        Route::delete('/{id}', [NewsController::class, 'destroy'])->name('admin.news.destroy');
        Route::get('/{id}', [NewsController::class, 'show'])->name('admin.news.show');
        // Route for guest news show
        // Route::get('/news/{id}', [NewsController::class, 'guestShow'])->name('guest.news.show');
        Route::get('/news/selengkapnya/{id}', [NewsController::class, 'selengkapnya'])->name('guest.news.selengkapnya');
        // Route::get('/news/selengkapnya', [NewsController::class, 'selengkapnya'])->name('guest.news.selengkapnya');
        // Route for viewing a single news item
        // Route for guest news show
        // Route::get('/news/{id}', [NewsController::class, 'guestShow'])->name('guest.news.show');
        // Route for admin news show
        // Route::get('/admin/news/{id}', [NewsController::class, 'adminShow'])->name('admin.news.show');


    });
});

