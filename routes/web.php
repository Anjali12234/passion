<?php

use App\Http\Controllers\Auth\Authcontroller;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;






// Auth
Route::get('login', [Authcontroller::class, 'loginPage'])->name('loginPage');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});