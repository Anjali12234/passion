<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', DashboardController::class)->name('dashboard');
Route::resource('officeSetting', SettingController::class)->only('index', 'store');
Route::resource('about', AboutController::class)->only('index', 'store', 'delete');
Route::resource('course', CourseController::class);
Route::put('course/{course}/updateCourseStatus', [CourseController::class, 'updateStatus'])->name('course.updateCourseStatus');
Route::resource('service', ServiceController::class);
Route::put('service/{service}/updateServiceStatus', [ServiceController::class, 'updateStatus'])->name('service.updateServiceStatus');


