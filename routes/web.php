<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ContactPageController;


Route::get('/', [PageController::class, 'welcome'])->name('welcome.page');

Route::get('/contact', ContactPageController::class)->name('contact.page');
Route::post('/contact', [ContactPageController::class, 'submit']);

// Customer CRUD routes
Route::resource('customers', CustomerController::class);