<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasswordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/register', [MyController::class, 'showRegistrationForm'])->name('register.show');
Route::post('/register', [MyController::class, 'register'])->name('register');

Route::get('/login', [MyController::class, 'showLoginForm'])->name('login.show');
Route::post('/login', [MyController::class, 'login'])->name('login');
Route::post('/logout', [MyController::class, 'logout'])->name('logout');

Route::get('/tablesnotes', function () {
    return view('tablesnotes');
})->name('tablesnotes');
