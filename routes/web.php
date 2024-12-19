<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/add', [ProductController::class, 'create']);
Route::post('/product.store', [ProductController::class, 'createStore'])->name('product.store');