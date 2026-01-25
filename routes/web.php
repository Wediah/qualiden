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

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/quality', function () {
    return view('quality');
})->name('quality');

Route::get('/health', function () {
    return view('health');
})->name('health');



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/settings.php';
