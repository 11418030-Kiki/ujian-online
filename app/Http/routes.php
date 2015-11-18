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
Route::get('/', 'BinaryController@index');

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
Route::get('/testing', function () {
    return view('content/scadmin/dashboard');
});

Route::get('home', 'HomeController@index');

Route::get('insert_guru',['as'=>'insert_guru','uses'=>'AdminController@insert_guru']);

Route::get('insert_siswa',['as'=>'insert_siswa','uses'=>'AdminController@insert_siswa']);

/* Rombel */
Route::get('insert_rombel', ['as'=>'insert_rombel','uses'=>'AdminController@insert_rombel']);

/* Ujian */
Route::get('insert_ujian', ['aas'=>'insert_ujian','uses'=>'AdminController@insert_ujian']);

Route::get('jurusan', 'AdminController@show_all_jurusan');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',


]);

