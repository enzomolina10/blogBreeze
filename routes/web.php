<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// ruta de TP3-LARAVEL publicas
Route::get('/', [HomeController::class, 'getHome'])->name('home');
Route::get('/category', [CategoryController::class, 'getIndex'])->name('category.index');
Route::get('/category/show/{id}', [CategoryController::class, 'getShow'])->name('category.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas importadas de TP3-LARAVEL protegidas por autenticación
    Route::get('/category/create', [CategoryController::class, 'getCreate'])->name('category.create');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'getEdit'])->name('category.edit');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
});

require __DIR__ . '/auth.php';
