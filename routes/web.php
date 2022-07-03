<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\CampaignController;
use App\Http\Controllers\Dashboard\CampaignerController;
use App\Http\Controllers\Dashboard\RoleController;



Route::get('login', [LoginController::class, 'showLoginForm'])->name('showLoginForm')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('showRegisterForm')->middleware('guest');
Route::post('register', [RegisterController::class, 'register'])->name('register');

// routes for nwew password
Route::get('/reset', [LoginController::class, 'showLinkRequestForm'])->name('showLinkRequestForm')->middleware('guest');

Route::get("/", [HomeController::class, 'index'])->name('home');

// new password
Route::get("/forgot-password", [NewPasswordController::class, 'index'])->name("forgot-password")->middleware('guest');
Route::post("/forgot-password", [NewPasswordController::class, 'store'])->name("forgot-password")->middleware('guest');



Route::group(
    [
        'middleware' => 'auth', 'prefix' => 'dashboard',
        'namespace' => 'Dashboard'
    ],
    function () {
        Route::get('/', [DashboardController::class, 'index'])->name("dashboard");
        Route::get('/campaigner', [CampaignerController::class, 'index'])->name("campaigners.index");
        Route::get('/causes', [CampaignController::class, 'index'])->name("campaigns.index");
        Route::get('/causes/create', [CampaignController::class, 'create'])->name("campaigns.create");
        Route::post('/causes/store', [CampaignController::class, 'store'])->name("campaigns.store");
        #Route::resource('/roles', RoleController::class);
    }
);
