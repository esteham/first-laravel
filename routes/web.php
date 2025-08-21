<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('products', ProductController::class);

Route::get('/contact', [PageController::class, 'contact'])->name('contact.page');

Route::get('/about',function () {
    return view('about');
});

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
    Route::get('/cSharp', function(){
        echo 'C# Trainig';
    });
    Route::get('/react', function(){
        echo 'React Trainig';
    });

});


//Controller Route


//Without Controller
// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact.page');


// Data passing to view
// Route::get('/article', function(){
//     return view ('testview',['articleName'=>['Article 1','Article 2','Article 3','Article 4',]]);
// });

Route::get('/with', function(){
    $withView = "With View";

    return view('testview')->with('withView', $withView);
});

Route::get('/compact', function(){
    $compactView = ["Compact View","Compact View 1"];
    $compactView2 = "Compact View 2";

    return view('testview')->with(compact('compactView', 'compactView2'));
});

Route::get('/myarticle',[PageController::class, 'article']);

Route::get('/profile/{age}', function ($age) {
    return view('testview', ['age' => $age]);
})->middleware('checkAge');

Route::get('/no-access', function () {
    return "You do not have access to this page.";
});

Route::get('/admin-dashboard', [PageController::class, 'display']);