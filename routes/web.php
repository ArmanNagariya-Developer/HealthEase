<?php

use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UserRegisterController;
use Illuminate\Support\Facades\Route;


Route::view("/","Home.index")->name("welcome");
Route::view('/user/login', 'UserAuth.Login')->name('user.login');
Route::get("/user/register",[UserRegisterController::class,"index"])->name("user.register");
