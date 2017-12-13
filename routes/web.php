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

Route::get('/tanitani', 'AwalController@awal');

Route::group(['middleware' => 'web'], function (){
	Route::group(['prefix'=>'tanitani'], function(){
		Route::get('petani', 'BiodataController@index');
		Route::get('daftar_pengepul','BiodataController@daftar');
		});
	});

Route::group(['middleware' => 'web'], function(){
	Route::group(['prefix' => 'tanitani'], function(){
		Route::get('admin', 'AdminController@index');
		Route::get('admin/data_desa','AdminController@tampil');
		Route::post('admin/data_desa', 'AdminController@tambah');
		Route::get('admin/{$id}/edit_desa','AdminController@edit');
		
	});
});
