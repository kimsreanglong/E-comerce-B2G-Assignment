<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\UserController;

// Route::get('/', function () {
//     return view('frontend.layout.master'); // ✅ load the child view, not the master
// });


Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('home');
});

Route::controller(ServiceController::class)->group(function(){
    Route::get('/service','index')->name('service');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/login','index')->name('login');
    Route::get('/login/register','register')->name('register');
});
