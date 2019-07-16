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

Route::get('/questionnaire', 'CoursesQuestionnaireController@next')->name('questionnaire');
Route::get('/questionnaire/next', 'CoursesQuestionnaireController@next')->name('next_questionnaire');

Route::get('/questionnaire/not_active', 'CoursesQuestionnaireController@not_active')->name('not_active');
Route::get('/questionnaire/answered_all', 'CoursesQuestionnaireController@answered_all')->name('answered_all');
Route::get('/questionnaire/{id}', 'CoursesQuestionnaireController@show');
Route::put('/questionnaire/{id}', 'CoursesQuestionnaireController@store');


Route::get('/hasil', 'HasilController@index')->name('hasil');
Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');