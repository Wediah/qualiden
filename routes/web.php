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

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/create', [ProjectController::class, 'create'])->middleware('auth', 'admin')->name('projects.create');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');


// Apply admin middleware to project management and dashboard
Route::middleware(['auth', 'admin'])->group(function () {
    Route::post('/store_projects', [ProjectController::class, 'store'])->name('projects.store');


    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');

    // Dashboard
    Route::view('dashboard', 'dashboard')
        ->middleware(['verified'])
        ->name('dashboard');
});

require __DIR__.'/settings.php';
