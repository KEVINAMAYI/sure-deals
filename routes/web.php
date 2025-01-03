<?php


use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';
require __DIR__ . '/front-end/web.php';
require __DIR__ . '/dashboard/web.php';

Route::middleware(['auth', 'verified'])->prefix('dashboard')->name('dashboard.')->group(function () {

    Route::get('/storage-link', function () {
        Artisan::call('storage:link');
    })->name('storage-link');

    Route::get('/refresh-db', function () {
        Artisan::call('migrate:fresh --seed');
        return 'Database refreshed successfully!';
    })->name('refresh-db');

    Route::get('/clear-cache', function () {
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        Artisan::call('cache:clear');
    });

});
