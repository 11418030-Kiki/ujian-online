<?php namespace App\Http\Controllers;

class CrudController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	// public function __construct()
	// {
	// 	$this->middleware('auth');
	// }

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function insert_guru()
	{
		return view('/admin/insert_guru');
	}

	public function insert_siswa()
	{
		return view('/admin/insert_siswa');
	}

	public function insert_jurusan()
	{
		return view('/admin/insert_jurusan');
	}

	public function insert_mapel()
	{
		return view('/admin/insert_mapel');
	}

	public function list_guru()
	{
		return view('/admin/list_guru');
	}

	public function list_siswa()
	{
		return view('/admin/list_siswa');
	}

	public function list_jurusan()
	{
		return view('/admin/list_jurusan');
	}

	public function list_mapel()
	{
		return view('/admin/list_mapel');
	}
}
