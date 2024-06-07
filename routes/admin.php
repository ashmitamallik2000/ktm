<?php

use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DesignationController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\LinkController;
use App\Http\Controllers\Admin\OfficeSettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\DashboardController;
use App\Models\Designation;
use Illuminate\Support\Facades\Route;

Route::get('dashboard',[ DashboardController::class,'dashboard'])->name('dashboard');
Route::resource('slider', SliderController::class);
Route::resource('link', LinkController::class);
Route::resource('department', DepartmentController::class);
Route::resource('designation', DesignationController::class);
Route::resource('employee', EmployeeController::class);
Route::resource('officeSetting', OfficeSettingController::class);