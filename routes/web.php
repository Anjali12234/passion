<?php

use App\Http\Controllers\Auth\Authcontroller;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



// Auth
Route::get('login', [Authcontroller::class, 'loginPage'])->name('loginPage');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
