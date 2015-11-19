<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurusan;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function show_all_jurusan()
	{
		$Jurusans = Jurusan::all();
		return $Jurusans;
		//return 'berhasil kuda';
	}

	public function insert_guru()
	{
		return view('/content/scadmin/insert_guru');
	}

	public function insert_siswa()
	{
		return view('/content/scadmin/insert_siswa');
	}

	public function insert_jurusan()
	{
		return view('/content/scadmin/insert_jurusan');
	}

	public function insert_mapel()
	{
		return view('/content/scadmin/insert_mapel');
	}

	public function list_guru()
	{
		return view('/content/scadmin/list_guru');
	}

	public function list_siswa()
	{
		return view('/content/scadmin/list_siswa');
	}

	public function list_jurusan()
	{
		return view('/content/scadmin/list_jurusan');
	}

	public function list_mapel()
	{
		return view('/content/scadmin/list_mapel');
	}
	/*
	public function index()
    {
        $flights = Flight::all();

        return view('flight.index', ['flights' => $flights]);
    }
    */
}
