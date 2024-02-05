<?php

use App\Http\Controllers\ArchivedController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostedController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/', [LoginController::class, 'authenticate'])->name('login-submit');
    Route::get('/registration', [RegistrationController::class, 'index'])->name('register');
    Route::post('/registration', [RegistrationController::class, 'store'])->name('store');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::resource('post', PostController::class);
    Route::put('archive/{id}', [PostController::class, 'archived'])->name('archive');
    Route::resource('posted', PostedController::class);
    Route::resource('unarchive', ArchivedController::class);
});
