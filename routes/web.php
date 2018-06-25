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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('cek', function(){
	return view('layouts.admin');

});

Route::get('user', function(){
	
	return view('layouts.user');

});

Route::group(['prefix'=>'admin', 'middleware'=>'auth','role:Admin'],function(){
Route::resource('siswa','SiswaController');
Route::resource('kelas','KelasController');
Route::resource('absensi','AbsensiController');

 });




Route::get('/', 'FrontendController@index');
Route::get('/rincianlowongan/{id}', 'FrontendController@bacalengkap');
