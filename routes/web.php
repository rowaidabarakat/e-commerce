<?php

use App\Http\Controllers\Admin\RelationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Frontenduser\UserpageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/' , [UserpageController::class , 'index'])->name('welcome');

// email verification and Reset Password.
// Auth::routes(['verify'=>true]);
Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Google login
Route::get('login/google' , [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback' , [LoginController::class, 'handleGoogleCallback']);

// Github login
Route::get('login/github' , [LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('login/github/callback' , [LoginController::class, 'handleGithubCallback']);


// Google Register
Route::get('login/google' , [RegisterController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback' , [RegisterController::class, 'handleGoogleCallback']);

// Github Register
Route::get('login/github' , [RegisterController::class, 'redirectToGithub'])->name('login.github');
Route::get('login/github/callback' , [RegisterController::class, 'handleGithubCallback']);


// Relation Categoris and Product
Route::get('/has-many-reverse' , [RelationController::class, 'hasManyReverse']);
Route::get('/has-many' , [RelationController::class, 'hasMany']);


// Add to cart.
// Route::middleware('auth','check.user')->prefix("user")->group(function(){
//     Route::get('/addToCart/{product}', [App\Http\Controllers\Frontenduser\UserpageController::class, 'addToCart'])->name('cart.add');
//     Route::get('shopping-cart', [App\Http\Controllers\Frontenduser\UserpageController::class, 'showcart'])->name('cart.show');
//     Route::resource("/profile", 'App\Http\Controllers\Frontenduser\UserpageController');

// });


// Route::get('/email' , function(){
//     Mail::to('moamengamal770@gmail.com')->send(new WelcomeMail());
//     return new WelcomeMail();
// });


