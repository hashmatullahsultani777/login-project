<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

Route::get('/auth/login', function () {
    return view('login');
});

Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);