<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::prefix('/blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
});

Route::prefix('/portfolio')->group(function () {
    Route::get('/', [PortfolioController::class, 'index'])->name('porto.index');
});

Route::get('/kontak', function () {
    return view('contact');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
