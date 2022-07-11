<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::get('/produk/{id}', [WelcomeController::class, 'detailProduk'])->name('detail');
Route::post('/sendmessage', [PesanController::class, 'store'])->name('send');

Auth::routes();
Route::get('/admin', function () {
    if (Auth::check()) {
        return redirect()->route('admin.home');
    }
    return redirect()->route('admin.login');
});

//Admin Login
Route::get('/admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'login']);

//Admin Dashboard
Route::get('/admin/home', [HomeController::class, 'index'])->name('admin.home');

//Admin Produk
Route::get('/admin/product', [ProductController::class, 'index'])->name('admin.product');
Route::get('/admin/product/add', [ProductController::class, 'create'])->name('admin.product.add');
Route::post('/admin/product/store', [ProductController::class, 'store'])->name('admin.product.store');
Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
Route::post('/admin/product/update/{id}', [ProductController::class, 'update'])->name('admin.product.update');
Route::get('/admin/product/delete/{id}', [ProductController::class, 'destroy'])->name('admin.product.delete');

//Admin User
Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user');
Route::get('/admin/user/add', [UserController::class, 'create'])->name('admin.user.add');
Route::post('/admin/user/store', [UserController::class, 'store'])->name('admin.user.store');
Route::get('/admin/user/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
Route::get('/admin/user/editpass/{id}', [UserController::class, 'editPass'])->name('admin.user.editpass');
Route::post('/admin/user/update/{id}', [UserController::class, 'update'])->name('admin.user.update');
Route::post('/admin/user/updatepass/{id}', [UserController::class, 'updatePass'])->name('admin.user.updatepass');
Route::get('/admin/user/delete/{id}', [UserController::class, 'destroy'])->name('admin.user.delete');

//Admin Pesan
Route::get('/admin/message', [PesanController::class, 'index'])->name('admin.message');
Route::get('/admin/message/delete/{id}', [PesanController::class, 'destroy'])->name('admin.message.delete');