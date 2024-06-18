<?php

use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DesignationController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\FeedBackController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\IntroductionController;
use App\Http\Controllers\Admin\LawCategoryController;
use App\Http\Controllers\Admin\LawController;
use App\Http\Controllers\Admin\LinkController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\OfficeSettingController;
use App\Http\Controllers\Admin\PublicationController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\DashboardController;
use App\Models\Designation;
use App\Models\Information;
use App\Models\Introduction;
use App\Models\LawCategory;
use Illuminate\Support\Facades\Route;

Route::get('dashboard',[ DashboardController::class,'dashboard'])->name('dashboard');
Route::resource('slider', SliderController::class);
Route::resource('link', LinkController::class);
Route::resource('department', DepartmentController::class);
Route::resource('designation', DesignationController::class);
Route::resource('employee', EmployeeController::class);
Route::resource('officeSetting', OfficeSettingController::class);
Route::resource('information', InformationController::class);
Route::resource('news', NewsController::class);
Route::resource('document', DocumentController::class);
Route::resource('publication', PublicationController::class);
Route::resource('lawCategory', LawCategoryController::class);
Route::resource('law', LawController::class);
Route::resource('feedback', FeedBackController::class);
Route::resource('introduction', IntroductionController::class);


