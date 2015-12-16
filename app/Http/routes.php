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
Route::get('/', ['middleware' => ['first', 'second'], function () {
    //
}]);
*/
Route::get('/', 'LoginController@index');
Route::group(['middleware' => 'admin'], function () {
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

            Route::post('add', 'AdminController@insert_jurusan');

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

// Authentication routes...



});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('profile', ['middleware' => 'auth', function() {
    // Only authenticated users may enter...
    return view('content\scadmin\dashboard');
}]);