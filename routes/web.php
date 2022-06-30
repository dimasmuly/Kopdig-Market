<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\MarketController;

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

/* for maintenance */
Route::get('/site-construction', [MaintenanceController::class, 'index']);

/* for market platform */
Route::get('/marketplace', [MarketController::class, 'index']);
Route::get('/marketplace/shop', [MarketController::class, 'shop']);
Route::get('/marketplace/shop/product-detail', [MarketController::class, 'detail_product']);
Route::get('/marketplace/wishlist', [MarketController::class, 'wishlist']);
Route::get('/marketplace/keranjang', [MarketController::class, 'keranjang']);
Route::get('/marketplace/bayar', [MarketController::class, 'bayar']);
Route::get('/marketplace/lacak_pesanan', [MarketController::class, 'lacak_pesanan']);
Route::get('/marketplace/profile', [MarketController::class, 'profile']);