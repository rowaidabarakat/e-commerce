<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/admin" , [DashboardController::class , 'index'])->middleware('auth' , 'check.admin')->name('admin');

Route::middleware('auth' , 'check.admin')->prefix('admin')->group(function(){
    Route::resource("/user" , UserController::class);
    Route::resource("/product" , ProductController::class);
    Route::resource("/category" , CategoryController::class);
});
