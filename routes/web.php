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
    return view('awal');
});
Route::get('test', 'BiodataController@tes');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tanitani', 'AwalController@awal');

Route::group(['middleware' => 'web'], function (){
	Route::group(['prefix'=>'tanitani'], function(){
		Route::get('petani', 'BiodataController@index');
		Route::get('petani/{id}/daftar_pengepul','BiodataController@daftar');
		// Route::get('petani/{id}/data_pengepuls', 'BiodataController@data_pengepul');
		Route::get('petani/{id}/data_pengepul', 'BiodataController@lokasi');
		Route::get('petani/profil', 'BiodataController@profil');
		Route::get('petani/semua_pengepul', 'PengepulController@tampil_semua');
		Route::get('peta', 'BiodataController@peta_semua');



		Route::get('admin', 'AdminController@index');
		// Route::get('admin', 'AdminController@add_pengepul');
		Route::post('admin/data_desa', 'AdminController@tambah');
		Route::get('admin/{id}/edit_desa','AdminController@edit');
		Route::put('admin/{id}','AdminController@update');
		Route::get('admin/hapus/{id}','AdminController@hapus');
		Route::get('admin/coba','AdminController@h');
		Route::get('admin/data_desa','AdminController@d');
		
		Route::get('admin/form_pengepul','PengepulController@fp');
		Route::get('admin/data_pengepul', 'PengepulController@tampil');
		Route::post('admin/data_pengepul', 'PengepulController@tambah');
		Route::get('admin/{id}/daftar_pengepul', 'PengepulController@daftar');
		Route::get('admin/{id}/nama_pengepul', 'PengepulController@nama');
		Route::get('admin/data_pengepul/{id}', 'PengepulController@hapus');
		Route::get('admin/{id}/edit_pengepul', 'PengepulController@edit');
		Route::put('admin/edit_pengepul/{id}', 'PengepulController@update');

		Route::get('admin/login','LoginController@log');
		Route::post('/loginpost', 'LoginController@loginPost');

		Route::get('/map', 'MapsController@index');
		// Route::get('/', function(){
	 //    $config = array();
	 //    $config['center'] = 'New York, USA';
	 //    GMaps::initialize($config);
	 //    $map = GMaps::create_map();

	 //    echo $map['js'];
	 //    echo $map['html'];

		// });
	});
});


?>
