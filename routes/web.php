<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\VideoCallController;
use App\Http\Middleware\AdminLoginMiddleware;
use App\Http\Middleware\UserLoginMiddleware;
use Faker\Guesser\Name;
use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Route;

// Guest Access Pages
Route::view("/", "Home.index")->name("welcome");
Route::view("/aboutus", "AboutUs.Aboutus")->name("aboutus");
Route::view("/blog", "Blogs.index")->name("blog");

// Public Doctor Routes
Route::get("/appointment", [DoctorController::class, "index"])->name("appointment");
Route::post("/doctor/search", [DoctorController::class, "search"])->name("doctor.search");

Route::get('/store', [ProductController::class, 'index'])->name('medicine.store');
Route::get('/medicine/{id}', [ProductController::class, 'show'])->name('medicine.details');

Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

// Book Appointment Routes (Protected for Users)
Route::middleware(['auth'])->group(function () {
    Route::get('/book-appointment/{doctor_id}', [AppointmentController::class, 'create'])->name('appointment.create');
    Route::post('/book-appointment', [AppointmentController::class, 'store'])->name('appointment.store');
    Route::get('/my-appointments', [AppointmentController::class, 'myAppointments'])->name('appointment.myAppointments');
    Route::get('/cancel-appointment/{id}', [AppointmentController::class, 'cancelAppointment'])->name('appointment.cancel');
    Route::get('/video-call/{appointment_id}', [VideoCallController::class, 'show'])->name('video.call');
    Route::get('/check-call/{id}', [AppointmentController::class, 'checkAndRedirectToCall'])->name('check.call');
   
    Route::get('/accept-call/{appointment}', [VideoCallController::class, 'acceptCall'])->name('accept.call');
    
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');

});

// User Registration & Login Routes
Route::prefix("user")->group(function () {
    Route::get("register", [UserRegisterController::class, "index"])->name("user.register");
    Route::post("register", [UserRegisterController::class, "addUser"])->name("adduser.register");

    Route::get('login', [UserLoginController::class, "index"])->name('user.login');
    Route::post("login", [UserLoginController::class, "LoginAuth"])->name("authuser.login");
    Route::get("logout", [UserLoginController::class, "UserLogout"])->name("user.logout");
});

// Admin Routes with Middleware
Route::prefix("admin")->middleware(['admin'])->group(function () {
    Route::view("/dashboard", "Admin.Home.index")->name("admin.dashboard");
});

Route::get("admin/login",[AdminAuthController::class,"loginPage"])->name("loginPage");
Route::get("admin/register",[AdminAuthController::class,"registerPage"])->name("registerPage");
Route::post("admin/register",[AdminAuthController::class,"register"])->name("registerProccess");






