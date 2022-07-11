<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_sanpham;
use App\Http\Controllers\Controller_danhmuc;
use App\Http\Controllers\Controller_tintuc;
use App\Http\Controllers\Controller_nhanvien;
use App\Http\Controllers\Controller_login;
use App\Http\Controllers\Controller_client;
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



Route::post('/admin/login', [Controller_login::class, 'login'])->name('login.login');
Route::post('/admin/dangky', [Controller_login::class, 'dangky'])->name('login.dangky');
Route::get('/admin/logout', [Controller_login::class, 'logout'])->name('login.logout');
Route::get('/', [Controller_client::class, 'index'])->name('client.index');
Route::get('/sanpham', [Controller_client::class, 'sanpham'])->name('client.sanpham');
Route::get('/sanpham/info/{id}', [Controller_client::class, 'sanpham_info'])->name('client.sanpham_info');
Route::get('/sanpham/{danhmuc}', [Controller_client::class, 'filter_sanpham'])->name('client.filter_sanpham');
Route::get('/price_sanpham', [Controller_client::class, 'price_sanpham'])->name('client.price_sanpham');
Route::get('/search_sanpham', [Controller_client::class, 'search_sanpham'])->name('client.search_sanpham');
Route::get('/tintuc', [Controller_client::class, 'tintuc'])->name('client.tintuc');
Route::get('/tintuc_info/{id}', [Controller_client::class, 'tintuc_info'])->name('client.tintuc_info');
Route::get('/cart', [Controller_client::class, 'cart'])->name('client.cart');
Route::get('/cart_buy/{id}', [Controller_client::class, 'cart_buy'])->name('client.cart_buy');
Route::get('/cart_remove/{id}', [Controller_client::class, 'cart_remove'])->name('client.cart_remove');
Route::get('/cart_them/{id}/{soluong}', [Controller_client::class, 'cart_tang'])->name('client.cart_tang');
Route::get('/cart_xoa/{id}/{soluong}', [Controller_client::class, 'cart_giam'])->name('client.cart_giam');
Route::get('/cart_info', [Controller_client::class, 'cart_info'])->name('client.cart_info');
Route::post('/thanhtoan', [Controller_client::class, 'thanhtoan'])->name('client.thanhtoan');
Route::group(['middleware' => ['AuthCheck']],function(){
    Route::get('/admin', [Controller_login::class, 'index'])->name('login');
    Route::get('/admin/create', [Controller_login::class, 'create'])->name('login.create');
    Route::get('/admin/home', function () {
        return view('admin.trangchu');
    })->name('admin.home');
    Route::resources([
        'admin_danhmuc'=> Controller_danhmuc::class,
        'admin_sanpham'=> Controller_sanpham::class,
        'admin_tintuc'=> Controller_tintuc::class,
        'admin_nhanvien'=> Controller_nhanvien::class,
        'admin_login'=>Controller_login::class
    ]);
});