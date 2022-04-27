<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admins\RolesController;
use App\Http\Controllers\Admins\UsersController;
use App\Http\Controllers\Admins\ProductController;
use App\Http\Controllers\Admins\DashboardController;
use App\Http\Controllers\Admins\CategoriesController;
use App\Http\Controllers\Admins\TypeOfProductsController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::middleware(['auth','IsNotUser'])->prefix('admin')->group(function () {
    Route::get('/',[DashboardController::class, 'index']);
    Route::get('/carts',[DashboardController::class, 'carts']);
    Route::resource('/users', UsersController::class);
    Route::resource('/roles', RolesController::class);
    Route::resource('/products', ProductController::class);
    Route::resource('/categories', CategoriesController::class);
    Route::resource('/typeofproduct', TypeOfProductsController::class);
});