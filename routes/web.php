<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/firm', function () {
    return view('firm');
})->name('about');

Route::get('/mission', function () {
    return view('mission');
})->name('mission');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/settings.php';
