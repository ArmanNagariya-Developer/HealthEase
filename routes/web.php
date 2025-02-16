<?php

use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Middleware\AdminLoginMiddleware;
use App\Http\Middleware\UserLoginMiddleware;
use Faker\Guesser\Name;
use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Route;


    // Home pages && guests access pages 
    Route::view("/","Home.index")->name("welcome");
    Route::view("/aboutus","AboutUs.Aboutus")->name("aboutus");
    Route::view("/blog","Blogs.index")->name("blog");

    // login && register pages routes
    Route::prefix("user")->group(function(){

        Route::get("register",[UserRegisterController::class,"index"])->name("user.register");
        Route::post("register",[UserRegisterController::class,"addUser"])->name("adduser.register");
    
        Route::get('login', [UserLoginController::class,"index"])->name('user.login');
        Route::post("login",[UserLoginController::class,"LoginAuth"])->name("authuser.login");
        Route::post("logout",[UserLoginController::class,"UserLogout"])->name("user.logout");
    });


Route::middleware([AdminLoginMiddleware::class])->group(function(){
    Route::prefix("admin",function(){
        Route::view("/dashboard","Admin.Home.index")->name("admin.dashboard");
    });
});






