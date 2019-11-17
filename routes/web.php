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
    session()->flush();
    return redirect('/login');
});

Route::post('/login/action', 'RegistrasiController@login');

Route::resource('/registrasi', 'RegistrasiController');

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::resource('/produk/kategori', 'KategoriProdukController');

Route::resource('/produk', 'ProdukController');

Route::resource('/laporan', 'LaporanController');
