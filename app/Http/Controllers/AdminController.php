<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\Guru;
use App\Models\MapelToJurusanMapping;
use App\Models\Mapel;
use App\Models\Siswa;
use Input;
use DB;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view('content\scadmin\dashboard');
		
	}

	public function insert_jurusan(Request $request)
	{	/*
		$jurusan = new Jurusan;
		$jurusan->KD_JURUSAN = Input::get('kd_jurusan');
		$jurusan->NAMA_JURUSAN = Input::get('nama_jurusan');
		$jurusan->DESKRIPSI = Input::get('deskripsi');
		$jurusan->save();
		*/
		$jurusan = new Jurusan;
		$jurusan->KD_JURUSAN = $request->kd_jurusan;
		$jurusan->NAMA_JURUSAN = $request->nama_jurusan;
		$jurusan->DESKRIPSI = $request->deskripsi;
		$jurusan->save();
		return $this->show_all_jurusan();
	}
	
	public function lihat_mapel($id)
	{
		$hasil = MapelToJurusanMapping::find($id)->jurusan;
		return $hasil;
	}

	public function login()
	{
		return view('/content/login/login_form');
	}
	
	public function mapel_to_jurusan($id)
	{
		//$hasil = Jurusan::find($id);
		//$mapel = Jurusan::find($id)->mapelsLegacy;
		//return view('content\scadmin\list_jurusan')->with('mapels', $mapel);
		//$jurusans = Mapel::find($id)->jurusans()->orderBy('NAMA_JURUSAN');
		//return view('content\scadmin\list_jurusan_gagal')->with('abc',$jurusans);
		$jurusans =  Mapel::find($id);
		return view('content\scadmin\list_jurusan_gagal')->with('abc',$jurusans);
	}

	public function jurusan_to_mapel($id)
	{
		$mapels = Jurusan::find($id)->mapels()->pivot;
		return $mapels;
	}

	public function show_all_jurusan()
	{
		$jurusans = Jurusan::paginate(10);
		//return $siswas;
		return view('content\scadmin\list_jurusan')->with('jurusans', $jurusans);
	}

	public function show_all_siswa()
	{
		$siswas = Siswa::paginate(10);
		//return $siswas;
		return view('content\scadmin\list_siswa')->with('siswas', $siswas);
	}

	public function show_all_mapel()
	{
		$mapels = Mapel::paginate(10);
		return view('content\scadmin\list_mapel')->with('mapels', $mapels);
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

	public function list_rombel()
	{
		return view('/content/scadmin/list_rombel');
	}

	public function insert_ujian()
	{
		return view('/content/scadmin/insert_ujian');
	}
	
	public function detail_jurusan($idnya)
	{
		$jurusan = Jurusan::FindOrFail($idnya);
		return view('/content/scadmin/list_jurusan')->with('jurusans',$jurusan);
	}



	/*
	public function index()
    {
        $flights = Flight::all();



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
 */
   
}
