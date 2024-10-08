<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; // Tambahkan ini
use Illuminate\Support\Facades\DB; // Tambahkan ini
use App\Models\Contact;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('layout.admintemplate', function ($view) {
            $contacts = Contact::all();
            $view->with('contacts', $contacts);
        });

        // Ambil data program keahlian dan bagikan ke semua tampilan
        View::composer('*', function ($view) {
            $majors = DB::table('majors')->get();
            $view->with('majors', $majors);
        });
    }
}
