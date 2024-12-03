<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth ; 
use App\Http\Controllers\AuthController;

Route::get("/login",[AuthController::class,'formLogin'])->name("login");
Route::get("/login",[AuthController::class,"login"]);
