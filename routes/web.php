<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PenjualanController;


// Rute untuk halaman utama dan dashboard
Route::get('home', [HomeController::class, 'home'])->name('home');
Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

// Rute untuk login dan proses login
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');

// Rute untuk logout dan proses logout
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::post('actionLogout', [LoginController::class, 'actionLogout'])->name('actionLogout');

// Rute untuk register dan proses registrasi
Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('actionRegister', [LoginController::class, 'actionRegister'])->name('actionRegister');

// Grup rute yang memerlukan autentikasi dan middleware prevent-back-history
Route::middleware(['auth', 'prevent-back-history'])->group(function () {
    // Tambahkan rute yang memerlukan autentikasi tetapi tidak perlu hak akses tambahan di sini (jika ada)
});

// Grup rute yang memerlukan autentikasi dan peran administrator
Route::middleware(['auth', 'administrator'])->group(function () {
    Route::resource('pengguna', PenggunaController::class);
    Route::resource('level', LevelController::class);
    Route::resource('category', KategoriController::class);
});
Route::resource('barang', BarangController::class);
Route::resource('penjualan', PenjualanController::class);
