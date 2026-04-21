<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Berikut adalah daftar rute untuk aplikasi Anda.
| Pastikan semua file view yang disebutkan ada di folder resources/views/.
*/

/* -------------------------- HALAMAN UTAMA -------------------------- */
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

/* -------------------------- HALAMAN LOGIN & DASHBOARD -------------------------- */
Route::view('/login', 'login')->name('login');
Route::view('/dashboard', 'dashboard')->name('dashboard');

Route::post('/logout', function (Request $request) {
    return redirect()->route('login');
})->name('logout');

/* 
   Rute POST untuk menangani login.
   Disarankan untuk mengganti ini dengan logika autentikasi Laravel.
*/
Route::post('/dashboard', function () {
    return redirect()->route('dashboard');
})->name('login.process');

/* -------------------------- HALAMAN ANALISIS DATA -------------------------- */
Route::view('/machinelearning', 'machinelearning')->name('machinelearning');
Route::view('/distribusimahasiswa', 'distribusimahasiswa')->name('distribusimahasiswa');
Route::view('/jeniskelamin', 'jeniskelamin')->name('jeniskelamin');
Route::view('/trendmahasiswa', 'trendmahasiswa')->name('trendmahasiswa');
Route::view('/peta-mahasiswa', 'peta_mahasiswa')->name('peta_mahasiswa');
Route::view('/peta_kab', 'peta_kab')->name('peta_kab');