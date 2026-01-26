<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Static pages
Route::view('/firm', 'firm')->name('about');
Route::view('/mission', 'mission')->name('mission');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');
Route::view('/quality', 'quality')->name('quality');
Route::view('/health', 'health')->name('health');

// Apply admin middleware to project management and dashboard
Route::middleware(['auth', 'admin'])->group(function () {
    // Projects resource (index, create, store, show, edit, update, destroy)
    Route::resource('projects', ProjectController::class);

    // Dashboard
    Route::view('dashboard', 'dashboard')
        ->middleware(['verified'])
        ->name('dashboard');
});

require __DIR__.'/settings.php';
