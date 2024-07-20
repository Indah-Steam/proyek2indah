<?php

use App\Http\Controllers\EkspedisiController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransaksiAdminController;
use App\Http\Controllers\TransaksiController;
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

Route::get('/', [TransaksiController::class, 'index'])->name('home');
Route::get('/shop', [Controller::class, 'shop'])->name('shop');
Route::get('/transaksi', [Controller::class, 'transaksi'])->name('transaksi');

Route::get('/admin/pembayaran', [Controller::class, 'pembayaran'])->name('pembayaran');
Route::GET('/admin/pembayaran/addPembayaran', [Controller::class, 'addPembayaran'])->name('addPembayaran');
Route::POST('/admin/pembayaran/savePembayaran', [Controller::class, 'savePembayaran'])->name('savePembayaran');
Route::GET('/admin/pembayaran/edit/{id}', [Controller::class, 'editPembayaran'])->name('editPembayaran');
Route::POST('/admin/pembayaran/update/{id}', [Controller::class, 'updatePembayaran'])->name('updatePembayaran');
Route::GET('/admin/pembayaran/deleteData/{id}', [Controller::class, 'destroyPembayaran'])->name('deletePembayaran');

Route::POST('/addTocart', [TransaksiController::class, 'addTocart'])->name('addTocart');
Route::POST('/storePelanggan', [UserController::class, 'storePelanggan'])->name('storePelanggan');
Route::POST('/login_pelanggan', [UserController::class, 'loginProses'])->name('loginproses.pelanggan');
Route::GET('/logout_pelanggan', [UserController::class, 'logout'])->name('logout.pelanggan');


Route::POST('/checkout/proses/{id}', [Controller::class, 'prosesCheckout'])->name('checkout.product');
Route::get('/checkout', [Controller::class, 'checkout'])->name('checkout');
Route::POST('/checkout/prosesPembayaran', [Controller::class, 'prosesPembayaran'])->name('checkout.bayar');



Route::get('/admin', [Controller::class, 'login'])->name('login');
Route::POST('/admin/loginProses', [Controller::class, 'loginProses'])->name('loginProses');








Route::get('/admin/dashboard', [Controller::class, 'admin'])->name('admin');
Route::get('/admin/product', [ProductController::class, 'index'])->name('product');
Route::get('/admin/logout', [Controller::class, 'logout'])->name('logout');
Route::get('/admin/addModal', [ProductController::class, 'addModal'])->name('addModal');

Route::GET('/admin/user_management', [UserController::class, 'index'])->name('userManagement');
Route::GET('/admin/user_management/addModalUser', [UserController::class, 'addModalUser'])->name('addModalUser');
Route::POST('/admin/user_management/addData', [UserController::class, 'store'])->name('addDataUser');
Route::get('/admin/user_management/editUser/{id}', [UserController::class, 'show'])->name('showDataUser');
Route::PUT('/admin/user_management/updateDataUser/{id}', [UserController::class, 'update'])->name('updateDataUSer');
Route::DELETE('/admin/user_management/deleteUSer/{id}', [UserController::class, 'destroy'])->name('destroyDataUser');

    Route::POST('/admin/addData', [ProductController::class, 'store'])->name('addData');
    Route::GET('/admin/editModal/{id}', [ProductController::class, 'show'])->name('editModal');
    Route::PUT('/admin/updateData/{id}', [ProductController::class, 'update'])->name('updateData');
    Route::DELETE('/admin/deleteData/{id}', [ProductController::class, 'destroy'])->name('deleteData');

    Route::get('/admin/ekspedisi', [Controller::class, 'ekspedisi'])->name('ekspedisi');
    Route::GET('/admin/ekspedisi/addEkspedisi', [Controller::class, 'addEkspedisi'])->name('addEkspedisi');
    Route::POST('/admin/ekspedisi/saveEkspedisi', [Controller::class, 'saveEkspedisi'])->name('saveEkspedisi');
    Route::GET('/admin/ekspedisi/edit/{id}', [Controller::class, 'editEkspedisi'])->name('editEkspedisi');
    Route::POST('/admin/ekspedisi/update/{id}', [Controller::class, 'updateEkspedisi'])->name('updateEkspedisi');
    Route::GET('/admin/ekspedisi/deleteData/{id}', [Controller::class, 'destroyEkspedisi'])->name('deleteEkspedisi');

;
