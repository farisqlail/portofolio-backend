<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::prefix('/blogs')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
});

Route::prefix('/portfolios')->group(function () {
    Route::get('/', [PortfolioController::class, 'index'])->name('porto.index');
});

Route::get('/kontak', function () {
    return view('contact');
});

Route::prefix('/blog')->group(function () {
    Route::get('/', [BlogController::class, 'admin'])->name('blog.admin');
    Route::post('/create', [BlogController::class, 'store'])->name('blog.store');
    Route::patch('/edit/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::get('/delete/{id}', [BlogController::class, 'destroy'])->name('blog.delete');
});

Route::prefix('/portfolio')->group(function () {
    Route::get('/', [PortfolioController::class, 'admin'])->name('portfolio.admin');
    Route::post('/create', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::patch('/edit/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
    Route::get('/delete/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.delete');
});

Route::get('/faris', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
