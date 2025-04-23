<?php

use Illuminate\Support\Facades\Route;

//import product controller
use App\Http\Controllers\ProductController;

//route resource for products
Route::resource('/products', ProductController::class);
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

Route::get('/', function () {
    return view('welcome');
});
