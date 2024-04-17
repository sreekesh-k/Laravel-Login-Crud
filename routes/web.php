<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\DisplayController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DisplayController::class, 'home'])->name('homepage');

Route::get('/login', [DisplayController::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'login'])->name('login.post');

Route::get('/register', [DisplayController::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'register'])->name('register.post');

Route::get('/read', [DisplayController::class, 'reading'])->name('reading');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
