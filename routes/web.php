<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Frontend\HomeController;
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

Route::get( '/', [HomeController::class, 'index'] )->name( 'home' );

Route::group( ['middleware' => 'auth'], function () {
    Route::get( '/admin/dashboard', [AdminController::class, 'index'] )->name( 'admin.dashboard' );
    Route::get( '/categories', [CategoryController::class, 'index'] )->name( 'admin.categories' );
    Route::post( '/categories', [CategoryController::class, 'store'] )->name( 'admin.categories.store' );
} );