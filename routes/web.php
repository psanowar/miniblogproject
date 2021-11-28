<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'show_post'])->name('home');

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'show_post'])->name('dashboard');
    Route::get('/post', [PostController::class, 'index'])->name('post.index');
    Route::post('/post', [PostController::class, 'create'])->name('post.create');
    Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
    Route::post('/post/edit/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/post/destroy/{id}', [PostController::class, 'destroy'])->name('post.destroy');
    
});



require __DIR__.'/auth.php';
