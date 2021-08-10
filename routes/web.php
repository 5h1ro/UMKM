<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Seller\SellerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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

Route::get('/', function () {
    return view('guest.index');
});

Route::get('/logout', function () {
    Auth::logout();
    return Redirect::to('/');
});

Route::get('/buy', [App\Http\Controllers\BuyController::class, 'index'])->name('buy');

Route::get('/checkout', [App\Http\Controllers\BuyController::class, 'checkout'])->name('checkout');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::middleware(['admin'])->group(function () {
        Route::get('admin', [AdminController::class, 'index']);
    });

    Route::middleware(['seller'])->group(function () {
        Route::get('seller', [SellerController::class, 'index']);
    });
});
