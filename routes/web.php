<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\AdminController;
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



Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'registerpost'])->name('register');
Route::get('/',[AuthController::class,'login'])->name('/');
Route::post('/login',[AuthController::class,'loginpost'])->name('login');

Route::get('/main',[ShoeController::class,'main'])->name('main');

Route::get('/admin',[AdminController::class,'admin'])->name('admin');
Route::post('/admin',[AdminController::class,'adminpost'])->name('admin');

Route::get('/api',[ShoeController::class,'index'])->name('home');
Route::get('/home',[ShoeController::class,'indexx'])->name('home');

Route::get('/create',[ShoeController::class,'shoes'])->name('create');
Route::post('/create',[ShoeController::class,'store'])->name('create');

Route::get('/dashboard',[ShoeController::class,'mainindex'])->name('dashboard');

Route::get('/edit{id}',[ShoeController::class,'edit'])->name('edit');
Route::put('/edit{id}',[ShoeController::class,'update'])->name('edit');

Route::get('/show{id}',[ShoeController::class,'show'])->name('show');

Route::get('/shoes{id}',[ShoeController::class,'addtocart'])->name('addtocart');
Route::get('/mycart',[ShoeController::class,'mycart'])->name('mycart');

Route::delete('/deleteproduct', [ShoeController::class, 'deleteProduct'])->name('deleteProduct');
Route::delete('/destroy{id}',[ShoeController::class,'destroy'])->name('destroy');

Route::patch('update-cart', [ShoeController::class, 'updates'])->name('update_cart');
Route::post('/session',[ShoeController::class,'session'])->name('session');
Route::get('/success',[ShoeController::class,'success'])->name('success');

Route::post('/logout',[AuthController::class,'logout'])->name('logout');




