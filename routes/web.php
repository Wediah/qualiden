<?php

use App\Http\Controllers\CasesController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Static pages
Route::view('/about', 'firm')->name('about');
// Route::view('/news', 'news')->name('news');
// Route::view('/cases', 'cases')->name('cases');
Route::view('/mission', 'mission')->name('mission');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');
Route::view('/quality', 'quality')->name('quality');
Route::view('/health', 'health')->name('health');
Route::get('/our-projects', [ProjectController::class, 'clientProjects'])->name('our-projects');
Route::view('/engineering', 'engineering')->name('engineering');
Route::view('/policy', 'policy')->name('policy');

Route::get('/projects/create', [ProjectController::class, 'create'])->middleware('auth', 'admin')->name('projects.create');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('/news', [NewsController::class, 'publicIndex'])->name('news.index');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');

// Public Cases Routes
Route::get('/cases', [CasesController::class, 'publicIndex'])->name('cases.index');
Route::get('/cases/{case}', [CasesController::class, 'show'])->name('cases.show');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::post('/projects/store', [ProjectController::class, 'store'])->middleware('auth', 'admin')->name('projects.store');
    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
    Route::view('dashboard', 'dashboard')
        ->middleware(['verified'])
        ->name('dashboard');

    // ==================== Cases Management ====================
    Route::prefix('admin/cases')->name('admin.cases.')->group(function () {
        Route::get('/', [CasesController::class, 'index'])->name('index');
        Route::get('/create', [CasesController::class, 'create'])->name('create');
        Route::post('/', [CasesController::class, 'store'])->name('store');
        Route::get('/{case}/edit', [CasesController::class, 'edit'])->name('edit');
        Route::put('/{case}', [CasesController::class, 'update'])->name('update');
        Route::delete('/{case}', [CasesController::class, 'destroy'])->name('destroy');
    });

    // ==================== News Management ====================
    Route::prefix('admin/news')->name('admin.news.')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('index');
        Route::get('/create', [NewsController::class, 'create'])->name('create');
        Route::post('/', [NewsController::class, 'store'])->name('store');
        Route::get('/{news}/edit', [NewsController::class, 'edit'])->name('edit');
        Route::put('/{news}', [NewsController::class, 'update'])->name('update');
        Route::delete('/{news}', [NewsController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('admin/contacts')->name('admin.contacts.')->group(function () {
        Route::resource('/', ContactUsController::class)->except(['create', 'edit', 'update']);
        Route::post('/{contact}/mark-read', [ContactUsController::class, 'markAsRead'])->name('mark-read');
        Route::post('/mark-all-read', [ContactUsController::class, 'markAllAsRead'])->name('mark-all-read');
        Route::post('/bulk-delete', [ContactUsController::class, 'bulkDelete'])->name('bulk-delete');
    });
});

// Public route
Route::post('/contact', [ContactUsController::class, 'store'])->name('contact.store');



require __DIR__.'/settings.php';
