<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;


Route::get('/', function () {
    return redirect()->route('customers.index');
});

// Customer CRUD routes
Route::resource('customer', CustomerController::class);