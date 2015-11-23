<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\Guru;
use App\Models\MapelToJurusan;
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
		return view('/content/login/login_form');
	}

	public function mapel_to_jurusan($id)
	{
		$hasil = Jurusan::find($id)->mapelsLegacy();
		return $hasil;
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

	public function list_mapel()
	{
		return view('/content/scadmin/list_mapel');
	}

	public function insert_rombel()
	{
		return view('/content/scadmin/insert_rombel');
	}

	public function insert_ujian()
	{
		return view('/content/scadmin/insert_ujian');
	}

	public function update_siswa()
	{
		return view('/content/scadmin/update_siswa');
	}

	public function update_guru()
	{
		return view('/content/scadmin/update_guru');
	}

	public function update_mapel()
	{
		return view('/content/scadmin/update_mapel');
	}

	public function update_jurusan()
	{
		return view('/content/scadmin/update_jurusan');
	}

	public function detail_siswa()
	{
		return view('/content/scadmin/detail_siswa');
	}

	public function detail_guru()
	{
		return view('/content/scadmin/detail_guru');
	}

	public function detail_jurusan()
	{
		return view('/content/scadmin/detail_jurusan');
	}

	// public function index()
 //    {
 //        $flights = Flight::all();

 //        return view('flight.index', ['flights' => $flights]);
 //    }
   
}
