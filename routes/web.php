<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome',["products" => Product::orderBy('id', 'desc')->get()]);
})->name('home');

Route::get('/add', [ProductController::class, 'create']);
Route::post('/product.store', [ProductController::class, 'createStore'])->name('product.store');