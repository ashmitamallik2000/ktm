<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Route::controller(FrontendController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('about', 'about')->name('about');
    Route::get('candidate', 'candidate')->name('candidate');
    Route::get('law', 'law')->name('law');
    Route::get('lawDetails/{law}', 'lawDetail')->name('lawDetail');
    Route::get('conatct', 'contact')->name('contact');
    Route::get('link', 'link')->name('link');
    Route::post('feedback', 'feedBack')->name('feedback');
});
Route::get('login', [AuthController::class, 'loginPage'])->name('login.form');
Route::post('login', [AuthController::class, 'login'])->name('login.signIn');