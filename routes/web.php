<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return "Homepage";
})->name('mainpage');

Route::get('about', function(){
    return "About Us Page";
});

Route::get('services', function(){
    return "Services";
});

Route::get('news/{id}', function($id){
    return 'News #' . $id;
});

Route::get('users/{name?}', function($name = null){
        return 'Hello ' . $name;
});

Route::prefix('admin')->group(function(){
    Route::get('/home', function(){});
    Route::get('/posts', function(){});
    Route::get('/products', function(){});
    Route::get('/comments', function(){});
});
//mmm
//mmm
//mmm
