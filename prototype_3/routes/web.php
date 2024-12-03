<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth ;
use App\Http\Controllers\AuthController ;
use App\Http\Controllers\AdminController ;
 
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth.middleware')->group(function () {
   Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
   Route::resource('articles' , AdminController::class);

});

Route::post('/logout', function(){
    Auth::logout() ;
    return redirect('/login');

})->name('logout');