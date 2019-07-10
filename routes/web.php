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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pengisian', 'PengisianController@index')->name('pengisian')->middleware('auth');
Route::get('/pengisian/check', 'PengisianController@check')->name('pengisian_check')->middleware('auth');
Route::get('/pengisian/{pengisian_id}', 'PengisianController@index')->name('pengisian_selanjutnya')->middleware('auth');
Route::put('/pengisian/{pengisian_id}', 'PengisianController@store')->name('input_pengisian');

Route::get('/hasil', 'HasilController@index')->name('hasil');
Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');

Route::get('/mahasiswa_seed', 'MahasiswaSeedController@seed')->name('mahasiswa_seed');
Route::get('/pengisian_seed', 'PengisianSeedController@seed')->name('pengisian_seed');
Route::get('/hasil_seed', 'HasilSeedController@seed')->name('hasil_seed');