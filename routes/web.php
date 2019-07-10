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

Route::get('/pengisian', 'PengisianController@next')->name('pengisian');
Route::get('/pengisian/next', 'PengisianController@next')->name('pengisian_next');

Route::get('/pengisian/not_active', 'PengisianController@not_active')->name('not_active');
Route::get('/pengisian/answered_all', 'PengisianController@answered_all')->name('answered_all');
Route::get('/pengisian/{id}', 'PengisianController@show');
Route::put('/pengisian/{id}', 'PengisianController@store');


Route::get('/hasil', 'HasilController@index')->name('hasil');
Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');

Route::get('/mahasiswa_seed', 'MahasiswaSeedController@seed')->name('mahasiswa_seed');
Route::get('/pengisian_seed', 'PengisianSeedController@seed')->name('pengisian_seed');
Route::get('/hasil_seed', 'HasilSeedController@seed')->name('hasil_seed');