<?php

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

Auth::routes();

// Route::get('/logout', function () {
//     Auth::logout();
// });

Route::get('/login', function () {
    return view('registrasi.login');
});

Route::get('/logout', function () {
    Session::flush();
    return redirect('/login');
    // return redirect('/dashboard');
});

// dashboard
Route::get('/dashboard', 'HomeController@index')->name('home');

// modul registrasi
Route::post('/login/action', 'RegistrasiController@login');
Route::resource('/registrasi', 'RegistrasiController');
Route::get('/email/verify/{vkey}', 'RegistrasiController@verifyEmail');
Route::get('/email/resend', 'RegistrasiController@resend');
Route::post('/email/resend/action', 'RegistrasiController@resendAction');

// modul produk
Route::resource('/produk/kategori', 'KategoriProdukController');
Route::resource('/produk', 'ProdukController');

// modul inventori
Route::resource('/inventori/kartustok', 'InventoriController');
Route::resource('/inventori/stokmasuk', 'StokMasukController');


// modul laporan
Route::resource('/laporan', 'LaporanController');

// modul outlet
Route::resource('/outlet', 'OutletController');

// modul pelanggan
Route::resource('/pelanggan', 'PelangganController');

// dump route
Route::get('/email/check', 'RegistrasiController@checkMail');
Route::get('/send/email', 'HomeController@mail');
