<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\AboutController;

// Route::get('/', function () {
//     return view('frontend.layout.master'); // ✅ load the child view, not the master
// });


Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('home');
});

Route::controller(ServiceController::class)->group(function(){
    Route::get('/service','index')->name('service');
    Route::get('/service/register-New-License','register')->name('register-new-license');
    Route::get('/service/renew','renew')->name('renew');
    Route::get('/service/booktest','booktest')->name('booktest');
    Route::get('/service/checkstatus','checkstatus')->name('checkstatus');
    Route::get('/service/checkstatus/download-duc','downloadDucument')->name('downloadDucument');
});


Route::controller(UserController::class)->group(function(){
    Route::get('/login','index')->name('login');
    Route::get('/login/register','register')->name('register');
});


Route::controller(NewsController::class)->group(function(){
    Route::get('/news', 'index')->name('news');
});

Route::controller(AboutController::class)->group(function(){
    Route::get('/about', 'index')->name('about');
});