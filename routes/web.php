<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\landingpageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[landingpageController::class,'index']);
Route::get('/dashboard',[DashboardController::class,'index']);
Route::view('/home', 'landingpage.home');
Route::view('/about', 'landingpage.about');
Route::view('/product', 'landingpage.product');
Route::view('/blog', 'landingpage.blog');


// Route::prefix('dashboard')->group(function () {
//     Route::get('/', [DashboardController::class, 'index']);
// });

