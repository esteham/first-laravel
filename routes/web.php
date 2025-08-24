<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\MessageController;


Route::get('/', [PageController::class, 'welcome'])->name('welcome.page');

Route::get('/contact', ContactPageController::class)->name('contact.page');
Route::post('/contact', [ContactPageController::class, 'submit']);

Route::get('/admin/messages',[MessageController::class,'index'])->name('admin.messages');

// Customer CRUD routes
Route::resource('customers', CustomerController::class);