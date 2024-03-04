<?php

use App\Http\Controllers\Category01Controller;
use App\Http\Controllers\Category02Controller;
use App\Http\Controllers\Category03Controller;
use App\Http\Controllers\Category04Controller;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [HomeController::class,'index']);

Route::prefix('daftarproduk')->group(function () {
    Route::get('/category/food-beverage', [Category01Controller::class, 'produk01']);
    Route::get('/category/beauty-health', [Category02Controller::class, 'produk02']);
    Route::get('/category/home-care', [Category03Controller::class, 'produk03']);
    Route::get('/category/baby-kid', [Category04Controller::class, 'produk04']);
    });

Route::get('/user/{id}/name/{name}', [UserController::class,'user']);

Route::get('/transaksi', [HalamanController::class,'halaman']); 