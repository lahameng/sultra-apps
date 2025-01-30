<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HatiController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;


Route::get('/login', [LoginController::class, 'tampilLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/main', [MainController::class, 'tampilDashboard'])->name('dashboard');
    Route::get('/hati', [HatiController::class, 'tampilHati'])->name('hati');
});