<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    GuestController,
    MajorController,
    NewsController,
    DashboardController,
    ContactController,
    NotificationController,
    AuthController,
};

// Route untuk tamu
Route::get('/', [GuestController::class, 'beranda'])->name('beranda');
Route::get('/tentang', [GuestController::class, 'tentang'])->name('tentang');
Route::get('/news/show', [GuestController::class, 'kabarlensa'])->name('kabarlensa');
Route::get('/kontak', [GuestController::class, 'kontak'])->name('kontak');

Route::middleware(['guest'])->group(function () {
    // Route Untuk Login
    Route::controller(AuthController::class)->group(function(){
        Route::get('/login','login')->name('login');
        Route::post('/authenticate','authenticate')->name('auth.authenticate');
    });
});

// Route untuk tamu melihat berita
Route::get('/news', [NewsController::class, 'index'])->name('guest.news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('guest.news.show');

Route::get('/', [MajorController::class, 'indexGuest'])->name('majors.index'); // Daftar untuk Guest
Route::get('/{id}', [MajorController::class, 'showGuest'])->name('majors.show'); // Detail untuk Guest

Route::middleware(['auth'])->group(function () {
    // Prefix untuk rute admin
    Route::prefix('admin')->group(function () {
        // Dashboard khusus admin
        Route::prefix('dashboard')->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard.index');
            // Route::get('/notifications/get', [NotificationController::class, 'getNotifications'])->name('notifications.get');
        });
    
        // Major Routes
        Route::prefix('major')->group(function () {
            Route::get('/', [MajorController::class, 'index'])->name('major.index'); // Daftar Major
            Route::get('/create', [MajorController::class, 'create'])->name('major.create'); // Form Create
            Route::post('/', [MajorController::class, 'store'])->name('major.store'); // Store
            Route::get('/{id}', [MajorController::class, 'show'])->name('major.show'); // Detail Major
            Route::get('/{id}/edit', [MajorController::class, 'edit'])->name('major.edit'); // Form Edit
            Route::put('/{id}', [MajorController::class, 'update'])->name('major.update'); // Update
            Route::delete('/{id}', [MajorController::class, 'destroy'])->name('major.destroy'); // Delete
        });
    
        // News Routes
        Route::prefix('news')->group(function () {
            Route::get('/', [NewsController::class, 'adminIndex'])->name('admin.news.index');
            Route::get('/create', [NewsController::class, 'create'])->name('admin.news.create');
            Route::post('/', [NewsController::class, 'store'])->name('admin.news.store');
            Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('admin.news.edit');
            Route::put('/{id}', [NewsController::class, 'update'])->name('admin.news.update');
            Route::delete('/{id}', [NewsController::class, 'destroy'])->name('admin.news.destroy');
            Route::get('/{id}', [NewsController::class, 'show'])->name('admin.news.show');
            Route::get('/selengkapnya/{id}', [NewsController::class, 'selengkapnya'])->name('guest.news.selengkapnya');
        });
    
        // Contact Routes
        Route::prefix('contact')->group(function () {
            Route::get('/', [ContactController::class, 'index'])->name('admin.contact.index');
            Route::get('/respond/{id}', [ContactController::class, 'showRespondForm'])->name('admin.contact.respond');
            Route::post('/respond/{id}', [ContactController::class, 'respond'])->name('admin.contact.respond.store');
            Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
            Route::get('/notifications/get', [NotificationController::class, 'getNotifications'])->name('notifications.get');
            Route::get('/contact/respond/{id}', [NotificationController::class, 'respond'])->name('admin.contact.responds');
        });
    });

    Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');
});

