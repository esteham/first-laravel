<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;


Route::get('/', [PageController::class, 'welcome'])->name('welcome.page');

// Customer CRUD routes
Route::resource('customers', CustomerController::class);