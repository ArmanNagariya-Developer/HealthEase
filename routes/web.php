<?php

use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UserRegisterController;
use Illuminate\Support\Facades\Route;


Route::view("/","Home.index")->name("welcome");
Route::view("/aboutus","AboutUs.Aboutus")->name("aboutus");

Route::prefix("user")->group(function(){

    Route::get('login', [UserLoginController::class,"index"])->name('user.login');
    Route::post("login",[UserLoginController::class,"LoginAuth"])->name("authuser.login");
    Route::post("logout",[UserLoginController::class,"UserLogout"])->name("user.logout");
});


Route::get("/user/register",[UserRegisterController::class,"index"])->name("user.register");
Route::post("/user/register",[UserRegisterController::class,"addUser"])->name("adduser.register");

