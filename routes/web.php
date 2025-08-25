<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AboutController;


Route::get('/', [PageController::class, 'welcome'])->name('welcome.page');

Route::get('/contact', ContactPageController::class)->name('contact.page');
Route::post('/contact', [ContactPageController::class, 'submit']);

Route::get('/about', AboutController::class)->name('about.page');

Route::get('/admin/messages',[MessageController::class,'index'])->name('admin.messages');

// Customer CRUD routes
Route::resource('customers', CustomerController::class);