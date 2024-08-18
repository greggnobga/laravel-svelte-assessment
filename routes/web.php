<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web'], function () {
    Route::get('/', [App\Http\Controllers\UserController::class, 'app'])->name('app');
    Route::get('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');
    Route::post('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');
});
