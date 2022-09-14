<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/detail-product/{id}', [ProductController::class, 'detail'])->name('products.detail');

Auth::routes();

//Authentication
Route::post('/login', [AuthController::class, 'login'])->name('post.login');
Route::post('/registration', [AuthController::class, 'registration'])->name('post.register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

//User
Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
    Route::group(['prefix' => 'users'], function () {
        Route::get('/index', [UserController::class, 'index'])->name('users.index');
        Route::get('/detail/{id}', [UserController::class, 'detail'])->name('users.detail');
        Route::get('/approval/{id}', [UserController::class, 'approvalStatus'])->name('users.approval');
    });

    Route::group(['prefix' => 'products'], function () {
        Route::get('/list', [ProductController::class, 'list'])->name('products.list');
        Route::get('/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('/store', [ProductController::class, 'store'])->name('products.store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
        Route::post('/update', [ProductController::class, 'update'])->name('products.update');
        Route::get('/destroy/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    });
});



