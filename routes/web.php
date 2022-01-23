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

Route::prefix('/faris/blog')->group(function () {
    Route::get('/', [BlogController::class, 'admin'])->name('blog.admin');
    Route::get('/faris/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/faris/blog/create', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/faris/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::patch('/faris/blog/edit/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::get('/faris/blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.delete');
});

Route::get('/faris', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
