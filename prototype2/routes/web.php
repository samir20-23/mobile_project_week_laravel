<?php

use Illuminate\Support\Facades\Route;
// 
use App\Http\Controllers\ArticleController;
Route::resource('articles', ArticleController::class);
// 


// Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);

// Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
// Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);


// Route::middleware('auth.middleware')->group(function () {
//     Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
// });
