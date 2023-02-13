<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', function(){
    return "Homepage";
})->name('mainpage');

Route::get('/about', function(){
    echo "before" . "<br>";
    // return url('/about');
    return route('about-us');
    //echo "after";
    // return "About Us Page";
    return;
})->name("about-us");

// Route::get('services', function(){
//     return "Services";
// });

// Route::get('news/{id}', function($id){
//     return 'News #' . $id;
// });

// Route::get('users/{name?}', function($name = null){
//         return 'Hello ' . $name;
// });

// Route::prefix('admin')->group(function(){
//     Route::get('/home', function(){});
//     Route::get('/posts', function(){});
//     Route::get('/products', function(){});
//     Route::get('/comments', function(){});
// });

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/team', [SiteController::class, 'team'])->name('team');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/user/{name?}', [SiteController::class, 'user'])->name('user');