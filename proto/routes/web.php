<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminArticleController;

use App\Http\Controllers\ArticleController;

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');