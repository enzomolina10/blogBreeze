<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'getHome']);

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/category', [CategoryController::class, 'getIndex']);

Route::get('/category/show/{id}', [CategoryController::class, 'getShow']);

Route::get('/category/create', [CategoryController::class, 'getCreate']);

Route::post('category', [CategoryController::class, 'store']);

Route::get('/category/edit/{id}', [CategoryController::class, 'getEdit']);

Route::put('/category/{id}', [CategoryController::class, 'update']);

Route::delete('/category/{id}', [CategoryController::class, 'destroy']);