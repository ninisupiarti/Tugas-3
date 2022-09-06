<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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
    return view('frontview.index');
});

Route::get('/index', [HomeController::class, 'showindex']);
Route::get('/product', [HomeController::class, 'showproduct']);
Route::get('/product-detail', [HomeController::class, 'showproductdetail']);
Route::get('/home-02', [HomeController::class, 'showhome02']);
Route::get('/home-03', [HomeController::class, 'showhome03']);
Route::get('/shoping-cart', [HomeController::class, 'showshopingcart']);

Route::get('/supplier', [HomeController::class, 'showsupplier']);
Route::get('/colegan', [HomeController::class, 'showcolegan']);
Route::get('/dashboard', [HomeController::class, 'showdashboard']);
Route::get('/promo', [HomeController::class, 'showpromo']);
Route::get('/user', [HomeController::class, 'showuser']);
Route::get('/login2', [AuthController::class, 'showlogin2']);

Route::get('/product2', [HomeController::class, 'showproduct2']);
Route::get('/kategori', [HomeController::class, 'showkategori']);


Route::get('/login', [AuthController::class, 'showlogin']);
Route::get('/register', [AuthController::class, 'showregister']);
Route::get('/login2', [AuthController::class, 'showlogin2']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/template', function () {
    return view('Template.base');
});


