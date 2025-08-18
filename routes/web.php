<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);

//2nd class Route test
Route::get('/hello', function (){
    return "Hello spider";
});

Route::get('/redirect', function (){
    return redirect('/hello');
});

Route::redirect('/home','/');

Route::get('/hello1/{name}', function ($name){
    return "Hello ".$name;
});

Route::get('/post/{id}/{name}', function($id,$name){
    return "This post ID is :".$id. " and post Name is :".$name;
})->where(['id'=>'[0-9]+', 'name' => '[a-zA-Z]+']);