<?php

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

Route::get('/', function () {
    return view('layouts.v_template');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/produk', function () {
    return view('produk');
});

Route::post('/produk', [App\Http\Controllers\ProdukController::class, 'pesan'])->name('pesan');    

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profile2', function () {
    return view('profile2');
});

Route::get('/item', [App\Http\Controllers\ItemController::class, 'index'])->name('item');
Route::get('/input', [App\Http\Controllers\ItemController::class, 'create'])->name('input');
Route::post('/simpan', [App\Http\Controllers\ItemController::class, 'store'])->name('simpan');
Route::get('/edit-item/{id}', [App\Http\Controllers\ItemController::class, 'edit'])->name('edit-item');
Route::get('/update-item/{id}', [App\Http\Controllers\ItemController::class, 'update'])->name('update-item');

Route::get('/data-gambar', [App\Http\Controllers\UploadgambarController::class, 'index'])->name('data-gambar');
Route::get('/create-gambar', [App\Http\Controllers\UploadgambarController::class, 'create'])->name('create-gambar');
Route::post('/simpan-gambar', [App\Http\Controllers\UploadgambarController::class, 'store'])->name('simpan-gambar');