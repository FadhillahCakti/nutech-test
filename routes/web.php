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

Route::get('/', 'BarangController@index');
Route::get('/tambah', 'BarangController@tambah');
Route::post('/proses', 'BarangController@store');
Route::get('/cari', 'BarangController@cari');
Route::get('/edit/{id}', 'BarangController@edit');
Route::get('/hapus/{id}', 'BarangController@hapus');
Route::put('/update/{id}', 'BarangController@update');

