<?php

use App\Http\Controllers\Dashboard\PostController as DashboardPostController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('post', DashboardPostController::class);