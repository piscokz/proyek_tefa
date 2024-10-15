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
Route::get('/bkk', [GuestController::class, 'bkk'])->name('bkk');
Route::get('/tc', [GuestController::class, 'tc'])->name('tc');
Route::get('/pkl', [GuestController::class, 'pkl'])->name('pkl');

// Route untuk tamu melihat berita
Route::get('/news', [NewsController::class, 'index'])->name('guest.news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('guest.news.show');
Route::get('/selengkapnya/{id}', [NewsController::class, 'selengkapnya'])->name('guest.news.selengkapnya');

// Route untuk menampilkan jurusan bagi tamu
Route::get('/majors', [MajorController::class, 'indexGuest'])->name('majors.index');
Route::get('/majors/{id}', [MajorController::class, 'showGuest'])->name('majors.show');

// Route untuk mengirim pertanyaan tamu (Tanya Lensa)
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Route untuk login dan autentikasi
Route::middleware(['guest'])->group(function () {
    Route::controller(AuthController::class)->group(function(){
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('auth.authenticate');
    });
});

// Route yang memerlukan autentikasi (admin area)
Route::middleware(['auth'])->group(function () {
    // Prefix untuk admin
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');
        
        // Route untuk major
        Route::prefix('major')->group(function () {
            Route::get('/major', [MajorController::class, 'index'])->name('major.index');
            Route::get('/create', [MajorController::class, 'create'])->name('major.create');
            Route::post('/majory', [MajorController::class, 'store'])->name('major.store');
            Route::get('/{id}', [MajorController::class, 'show'])->name('major.show');
            Route::get('/{id}/edit', [MajorController::class, 'edit'])->name('major.edit');
            Route::put('/{id}', [MajorController::class, 'update'])->name('major.update');
            Route::delete('/{id}', [MajorController::class, 'destroy'])->name('major.destroy');
        });
    
        // Route untuk berita
        Route::prefix('news')->group(function () {
            Route::get('/', [NewsController::class, 'adminIndex'])->name('admin.news.index');
            Route::get('/create', [NewsController::class, 'create'])->name('admin.news.create');
            Route::post('/', [NewsController::class, 'store'])->name('admin.news.store');
            Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('admin.news.edit');
            Route::put('/{id}', [NewsController::class, 'update'])->name('admin.news.update');
            Route::delete('/{id}', [NewsController::class, 'destroy'])->name('admin.news.destroy');
            Route::get('/{id}', [NewsController::class, 'show'])->name('admin.news.show');
        });
    
        // Route untuk kontak (admin)
        Route::prefix('contact')->group(function () {
            Route::get('/', [ContactController::class, 'index'])->name('admin.contact.index');
            Route::get('/respond/{id}', [ContactController::class, 'showRespondForm'])->name('admin.contact.respond');
            Route::post('/respond/{id}', [ContactController::class, 'respond'])->name('admin.contact.respond.store');
            Route::delete('/{id}', [ContactController::class, 'destroy'])->name('admin.contact.destroy');
        });
    });
    
    // Route untuk logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});