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


//Group route
Route::group([], function(){

    Route::get('/first', function(){
        echo "First Route";
    });

    Route::get('/second', function(){
        echo "Second Route";
    });

    Route::get('/third', function(){
        echo "Third Route";
    });

});


//Route Prefix
Route::group(['prefix' => 'Prefix'], function(){
    Route::get('/aws', function(){
        echo 'AWS Trainig';
    });
    Route::get('/laravel', function(){
        echo 'Laravel Trainig';
    });
    Route::get('/c#', function(){
        echo 'C# Trainig';
    });
    Route::get('/react', function(){
        echo 'React Trainig';
    });

});