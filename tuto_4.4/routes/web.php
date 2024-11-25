<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminArticleController;

Route::get('/', function () {
    return "Liste des articles";
});

Route::get('/login', function () {
    return "login page";
})->name("login");

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


// Route::middleware(['role:admin'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
//     Route::resource('/admin/articles', AdminArticleController::class);
// });