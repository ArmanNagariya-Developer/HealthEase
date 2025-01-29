<?php

use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UserRegisterController;
use Illuminate\Support\Facades\Route;


Route::view("/","Home.index")->name("welcome");

Route::view('/user/login', 'Home.Login')->name('user.login');
Route::post("/user/login",[UserLoginController::class,"LoginAuth"])->name("authuser.login");
Route::post("/user/logout",[UserLoginController::class,"UserLogout"])->name("user.logout");

Route::get("/user/register",[UserRegisterController::class,"index"])->name("user.register");
Route::post("/user/register",[UserRegisterController::class,"addUser"])->name("adduser.register");

Route::view("/loader","layout.loader");