<?php

use App\Http\Controllers\blog\BlogController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use App\Models\Category;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('dashboard')->group(function(){
    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);
});

Route::group(['prefix'=> 'blog'], function() {
    Route::get('',[BlogController::class, 'index'] )->name('blog.index');
    Route::get('detail/{post}',[BlogController::class, 'show'] )->name('blog.show');
});

// Route::resource('post', PostController::class);
// Route::resource('category', CategoryController::class);