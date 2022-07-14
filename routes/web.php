<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index']);
Route::get('/products/create', [\App\Http\Controllers\ProductController::class, 'create']);
Route::post('/products/store', [\App\Http\Controllers\ProductController::class, 'store']);
Route::get('/products/show/{product}', [\App\Http\Controllers\ProductController::class, 'show']);
Route::get('/products/edit/{product}', [\App\Http\Controllers\ProductController::class, 'edit']);
Route::post('/products/update/{product}', [\App\Http\Controllers\ProductController::class, 'update']);
Route::post('/products/delete/{product}', [\App\Http\Controllers\ProductController::class, 'destroy']);


