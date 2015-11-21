<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Mulai Routes untuk binary admin
*/
Route::get('/', 'AdminController@index');

Route::get('blank','BinaryController@show_blank');

Route::get('chart','BinaryController@show_chart');

Route::get('form','BinaryController@show_form');

Route::get('table','BinaryController@show_table');

Route::get('tab-panel','BinaryController@show_tab_panel');

Route::get('ui','BinaryController@show_ui');


/*
Routes untuk binary admin selesai
*/

//Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');

Route::get('insert_guru',['as'=>'insert_guru','uses'=>'AdminController@insert_guru']);

Route::get('insert_siswa',['as'=>'insert_siswa','uses'=>'AdminController@insert_siswa']);

/* Rombel */
Route::get('insert_rombel', ['as'=>'insert_rombel','uses'=>'AdminController@insert_rombel']);

/* Ujian */
Route::get('insert_ujian', ['aas'=>'insert_ujian','uses'=>'AdminController@insert_ujian']);

Route::get('insert_jurusan',['as'=>'insert_jurusan','uses'=>'AdminController@insert_jurusan']);

Route::get('insert_mapel',['as'=>'insert_mapel','uses'=>'AdminController@insert_mapel']);

Route::get('list_guru',['as'=>'list_guru','uses'=>'AdminController@list_guru']);

Route::get('list_siswa',['as'=>'list_siswa','uses'=>'AdminController@list_siswa']);

Route::get('list_jurusan',['as'=>'list_jurusan','uses'=>'AdminController@list_jurusan']);

Route::get('list_mapel',['as'=>'list_mapel','uses'=>'AdminController@list_mapel']);

Route::get('jurusan', 'AdminController@show_all_jurusan');

/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',


]);*/

//Route untuk view masih kasar

Route::get('/scadmin/login', function () {
    return view('content/login/login_form');
});

Route::get('/scadmin/insert_jurusan', function () {
    return view('content/scadmin/insert_jurusan');
});

Route::get('/scguru', function () {
    return view('content/scguru/dashboard');
});

Route::get('/scsiswa', function () {
    return view('content/scsiswa/dashboard');
});



Route::get('list_jurusan',['as'=>'list_jurusan','uses'=>'AdminController@list_jurusan']);

Route::get('form_insert_jurusan',function() {
	return view('content/scadmin/insert_jurusan');
});

Route::post('form_insert_jurusan/add','AdminController@addJurusan');

Route::post('add_guru','AdminController@addGuru');

