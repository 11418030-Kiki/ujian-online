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
Mulai Routes untuk Login
*/
Route::get('/', 'LoginController@index');

Route::get('/login', 'LoginController@index');

Route::get('/reset_password', 'LoginController@reset_password');

/*
Routes untuk binary admin selesai
*/

//Route::get('/', 'WelcomeController@index');
Route::get('/dashboard', 'AdminController@index');

Route::get('insert_guru',['as'=>'insert_guru','uses'=>'AdminController@insert_guru']);

Route::get('insert_siswa',['as'=>'insert_siswa','uses'=>'AdminController@insert_siswa']);

/* Rombel */
Route::get('insert_rombel', ['as'=>'insert_rombel','uses'=>'AdminController@insert_rombel']);
Route::get('list_rombel', ['as'=>'list_rombel','uses'=>'AdminController@list_rombel']);
Route::get('update_rombel', ['as'=>'update_rombel', 'uses'=>'AdminController@update_rombel']);
Route::get('detail_rombel', ['as'=>'detail_rombel', 'uses'=>'AdminController@detail_rombel']);

/* Ujian */
Route::get('insert_ujian', ['as'=>'insert_ujian','uses'=>'AdminController@insert_ujian']);
Route::get('list_ujian', ['as'=>'list_ujian','uses'=>'UjianController@list_ujian']);//udah diganti ke controller ujian
Route::get('update_ujian', ['as'=>'update_ujian', 'uses'=>'AdminController@update_ujian']);
Route::get('detail_ujian', ['as'=>'detail_ujian', 'uses'=>'AdminController@detail_ujian']);


Route::get('insert_mapel',['as'=>'insert_mapel','uses'=>'AdminController@insert_mapel']);

Route::get('list_guru',['as'=>'list_guru','uses'=>'AdminController@list_guru']);

Route::get('list_siswa',['as'=>'list_siswa','uses'=>'AdminController@list_siswa']);

Route::get('list_jurusan',['as'=>'list_jurusan','uses'=>'AdminController@list_jurusan']);

Route::get('list_mapel',['as'=>'list_mapel','uses'=>'AdminController@list_mapel']);

Route::get('update_siswa',['as'=>'update_siswa','uses'=>'AdminController@update_siswa']);

Route::get('update_guru',['as'=>'update_guru','uses'=>'AdminController@update_guru']);

Route::get('update_mapel',['as'=>'update_mapel','uses'=>'AdminController@update_mapel']);

Route::get('update_jurusan',['as'=>'update_jurusan','uses'=>'AdminController@update_jurusan']);

Route::get('detail_siswa',['as'=>'detail_siswa','uses'=>'AdminController@detail_siswa']);

Route::get('detail_guru',['as'=>'detail_guru','uses'=>'AdminController@detail_guru']);

Route::get('detail_jurusan',['as'=>'detail_jurusan','uses'=>'AdminController@detail_jurusan']);

Route::get('jurusan', 'AdminController@show_all_jurusan');

Route::get('insert_soal', ['as'=>'insert_soal', 'uses'=>'AdminController@insert_soal']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',


]);

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

Route::get('proses_ujian',function(){
	return view('content/scsiswa/prosesujian');
});

Route::get('mapping_jurusan/{id}', 'AdminController@mapel_to_jurusan');

Route::get('jurusan/{id}/view_edit','AdminController@detail_jurusan');

Route::get('mapel/{id}/view_edit','AdminController@lihat_mapel');


Route::get('mapping_mapel/{id}', 'AdminController@jurusan_to_mapel');

Route::get('random/{id}',['as'=>'random','uses'=>'UjianController@random']);//masih test




// Routing yang udh dipisahin
// contoh prefix
/*
		Route::group(['prefix' => 'admin'], function () {
		    Route::get('users', function ()    {
		        // Matches The "/admin/users" URL
		    });
		});

		Route::group(['prefix' => 'accounts/{account_id}'], function () {
		    Route::get('detail', function ($account_id)    {
		        // Matches The accounts/{account_id}/detail URL
		    });
		});

*/

// contoh group
/*
	Route::group(['as' => 'admin::'], function () {
	    Route::get('dashboard', ['as' => 'dashboard', function () {
	        // Route named "admin::dashboard"
	    }]);
	});
*/

Route::group(['prefix' => 'admin'], function()
{
    // /admin/dashboard
    Route::get('dashboard', [
        'as' => 'dashboard', 
        'uses' => 'AdminController@Index'
    ]);

    // /admin/members
    Route::group(['prefix' => 'siswa'], function()
    {
        Route::get('show_all', [
            'as' => 'show_all', 
            'uses' => 'AdminController@show_all_siswa'
        ]);

        Route::get('insert', function (){
        	return view('content\scadmin\insert_siswa');
        }
        );

        // /admin/members/search
        Route::get('search', [
            'as' => 'admin_member_search', 
            'uses' => 'UsersController@getMemberSearch'
        ]);

        Route::get('{id}/status', [
            'as' => 'admin_member_inactive', 
            'uses' => 'UsersController@getUserInactive'
        ]);

        Route::post('{id}/remove', [
           'before' => 'isGod',
            'as' => 'admin_member_remove', 
            'uses' => 'UsersController@postRemove'
        ]);

        Route::get('mailinglist', [
            'as' => 'admin_member_maillist', 
            'uses' => 'UsersController@getMailingList'
        ]);

    });

    Route::group(['prefix' => 'jurusan'], function()
    {
        Route::get('show_all', [
            'as' => 'show_all', 
            'uses' => 'AdminController@show_all_jurusan'
        ]);

        Route::get('form_insert', function (){
        	return view('content\scadmin\insert_jurusan');
        }
        );

       // Route::post('add', 'AdminController@insert_jurusan');

    });

    Route::group(['prefix' => 'mapel'], function()
    {
        Route::get('show_all', [
            'as' => 'show_all', 
            'uses' => 'AdminController@show_all_mapel'
        ]);

        Route::get('form_insert', function (){
        	return view('content\scadmin\insert_mapel');
        });

        Route::post('insert_jurusan', [
        	'as' => 'insert_jurusan', 
            'uses' => 'AdminController@insert_jurusan'

        ]);

    });
});


Route::post('admin/jurusan/add','AdminController@insert_jurusan');
