<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/top', [App\Http\Controllers\MainController::class,'index']);
Route::get('/top', [App\Http\Controllers\MainController::class,'index']);
Route::get('/weight', [App\Http\Controllers\MainController::class,'weight']);
