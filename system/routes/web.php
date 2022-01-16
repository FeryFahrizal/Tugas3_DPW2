<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

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
    return view('FrontView.index');
});

Route::get('/index', [HomeController::class, 'showindex']);
Route::get('/home', [HomeController::class, 'showhome']);
Route::get('/about', [HomeController::class, 'showabout']);
Route::get('/product', [HomeController::class, 'showproduct']);
Route::get('/testimonial', [HomeController::class, 'showtestimonial']);
Route::get('/contact', [HomeController::class, 'showcontact']);
Route::get('/services', [HomeController::class, 'showservices']);

Route::get('/supplier', [HomeController::class, 'showsupplier']);
Route::get('/colegan', [HomeController::class, 'showcolegan']);
Route::get('/dashboard', [HomeController::class, 'showdashboard']);
Route::get('/promo', [HomeController::class, 'showpromo']);
Route::get('/login2', [AuthController::class, 'showlogin2']);

Route::get('/product2', [HomeController::class, 'showproduct2']);
Route::get('/kategori', [HomeController::class, 'showkategori']);
Route::post('/Produk', [ProdukController::class, 'store']);
Route::get('/Produk/{Produk}', [ProdukController::class, 'show']);
Route::get('/Produk/{Produk}/edit', [ProdukController::class, 'edit']);
Route::put('/Produk/{Produk}', [ProdukController::class, 'update']);
Route::delete('/Produk/{Produk}', [ProdukController::class, 'destroy']);

Route::get('/login', [AuthController::class, 'showlogin']);
Route::get('/registrasi', [AuthController::class, 'showregistrasi']);
Route::get('/login2', [AuthController::class, 'showlogin2']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/template', function () {
    return view('Template.base');
});


