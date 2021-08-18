<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CheckOngkirController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\StoreController;
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

Route::get('/', [DashboardController::class, 'index']);

Route::get('/logout', function () {
    Auth::logout();
    return Redirect::to('/');
});

// ========== buy
Route::get('/buy/{id}', [BuyController::class, 'index'])->name('buy');
Route::get('/checkout/{id}', [BuyController::class, 'checkout'])->name('checkout');
Route::get('/cart', [BuyController::class, 'cart'])->name('cart');
// ========= end buy

Route::get('/ongkir', [CheckOngkirController::class, 'index']);
Route::post('/ongkir', [CheckOngkirController::class, 'check_ongkir']);
Route::get('/cities/{province_id}', [CheckOngkirController::class, 'getcities']);

// ====== check ongkir
Route::get('/check', [CheckOngkirController::class, 'check_ongkir'])->name('check');
// ====== end check ongkir

// ====== by categories
Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
// ====== end by categories

// ====== store
Route::get('/store/{id}', [StoreController::class, 'index'])->name('store');
// ====== end stire


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::middleware(['admin'])->group(function () {
        Route::get('admin', [AdminController::class, 'index']);
    });

    Route::middleware(['seller'])->group(function () {
        Route::get('seller', [SellerController::class, 'index']);
    });
});
