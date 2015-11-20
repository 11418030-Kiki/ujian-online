<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\Guru;
use Input;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view('/content/scadmin/insert_guru');
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

	public function list_jurusan()
	{
		$jurusans = Jurusan::all();
		//return $jurusans;
		return view('/content/scadmin/list_jurusan')->with('banyak_jurusan', $jurusans);
	}

	public function addGuru(Request $request)
	{
		$guru = new Guru;

		$guru->NIP = $request->NIP;
		$guru->NUPTK = $request->NUPTK;
		$guru->nama = $request->nama;
		$guru->TTL = $request->TTL;
	}

	public function addJurusan(Request $request)
	{	
		$jurusan = new Jurusan;
		$jurusan->KD_JURUSAN = Input::get('kd_jurusan');
		$jurusan->NAMA_JURUSAN = Input::get('nama_jurusan');
		$jurusan->DESKRIPSI = Input::get('deskripsi');
		$jurusan->save();
	}
	
	/*
	public function index()
    {
        $flights = Flight::all();

        return view('flight.index', ['flights' => $flights]);
    }
    */
}
