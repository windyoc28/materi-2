<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\authController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\clientprodukController;
use App\Http\Controllers\userController;
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
    return view('welcome');
});

Route::get('template', function () {
    return view('template.base');
});

Route::get('beranda', [homeController::class, 'showBeranda']);

Route::get('kategori', [homeController::class, 'showKategori']);
Route::get('registrasi', [homeController::class, 'showRegistrasi']);

Route::get('produk', [produkController::class, 'index']);
Route::get('produk/create', [produkController::class, 'create']);
Route::post('produk', [produkController::class, 'store']);
Route::get('produk/{produk}', [produkController::class, 'show']);
Route::get('produk/{produk}/edit', [produkController::class, 'edit']);
Route::put('produk/{produk}', [produkController::class, 'update']);
Route::delete('produk/{produk}', [produkController::class, 'destroy']);

Route::get('user', [userController::class, 'index']);
Route::get('user/create', [userController::class, 'create']);
Route::post('user', [userController::class, 'store']);
Route::get('user/{user}', [userController::class, 'show']);
Route::get('user/{user}/edit', [userController::class, 'edit']);
Route::put('user/{user}', [userController::class, 'update']);
Route::delete('user/{user}', [userController::class, 'destroy']);

Route::get('login', [authController::class, 'showLogin']);
Route::post('login', [authController::class, 'loginProcess']);
Route::get('logout', [authController::class, 'logout']);

Route::get('produkcs', [clientprodukController::class, 'index']);
Route::get('produkcs/{produk}', [clientprodukController::class, 'show']);

Route::get('templatecs', function () {
    return view('templatecs.base');
});

Route::get('berandacs', function () {
    return view('berandacs');
});

Route::get('produkcs', function () {
    return view('produkcs');
});

Route::get('kategorics', function () {
    return view('kategorics');
});

Route::get('logincs', function () {
    return view('logincs');
});

Route::get('registrasics', function () {
    return view('registrasics');
});