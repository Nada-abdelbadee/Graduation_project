<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/', [ProductController::class , 'showProduct']);

Route::middleware('auth')->prefix('/')->group(function () {
    Route::get('/allproduct', [ProductController::class , 'AllProduct'])->name('allproduct');
    Route::get('/show{id}', [ProductController::class , 'ShowCategory'])->name('show');
    Route::get('/showitem/{id}', [ProductController::class , 'showitem'])->name('showitem');
    Route::get('/showuser/{id}', [ProductController::class , 'showuser'])->name('showuser');
    Route::post('/addcart/{id}', [ProductController::class , 'addcart'])->name('addcart');
    Route::get('/search' , [ProductController::class , 'search'])->name('search');
    Route::get('/userprofile/{id}' , [ProductController::class, 'showuser'])->name('userprofile');
    Route::get('/addtocart/{id}' , [ProductController::class, 'addtocart'])->name('addtocart');
    Route::get('/destroy/{id}' , [ProductController::class, 'destroy'])->name('destroy');


});




Auth::routes(['verify' => true]);

Route::get('Login/github' , [App\Http\Controllers\Auth\LoginController::class , 'redirectToGithub'])->name('login.github');
Route::get('Login/github/callback' , [App\Http\Controllers\Auth\LoginController::class , 'handleGithubCallback']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
