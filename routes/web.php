<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\CategoryController;



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/posts', PostController::class);

Route::resource('/categories', CategoryController::class);


Route::get('/', [WelcomeController::class, 'index'])->name('welcome');









