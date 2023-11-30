<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [ProductController::class, 'register'])->name('user.register');
    Route::post('/', [ProductController::class, 'submitRegister'])->name('user.submitregister');
    Route::get('/login', [ProductController::class, 'logIn'])->name('user.login');
    Route::post('/login', [ProductController::class, 'submitLogIn'])->name('user.submitlogin');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/products', [ProductController::class, 'index'])->name('product.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/products', [ProductController::class, 'store'])->name('product.store');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/products/{product}/update', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/products/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::delete('/logout', [ProductController::class, 'logout'])->name('user.logout');
});
