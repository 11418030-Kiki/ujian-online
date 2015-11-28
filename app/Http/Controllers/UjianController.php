<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Siswa;
use App\Models\Soal;

use Illuminate\Http\Request;
//use DateTime;
//use DateInterval;
use Carbon\Carbon;
use DateTimeZone;
use DB;

class UjianController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view('ujian');
	}

	public function tampil()
	{
		//$datas = Siswa::all();
		//return view('testorm')->with('datas', $datas);
		//return $datas;
		// return 'tay';


	}

	public function get_sisa_waktu_ujian()
	{
		$date = Carbon::now('Asia/Jakarta');
		$selesai = Carbon::createFromFormat('Y-m-d H:i:s', '2015-11-12 14:00:15','Asia/Jakarta');
		//return $date->diffInSeconds($selesai);
		return view('proses_ujian')->with('sisa_waktu',$date->diffInSeconds($selesai));
	}	
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function ujian()
	{
		return view('siswa/ujian');
	}
	public function get_all_soal()
	{
		$kumpulan_soal = Soal::all();
		return $kumpulan_soal;
	}

	public function periksa($jawaban_siswa)
	{
		$hasil = 0;
		//$jawaban_siswa = 'B_C_D_D_A';
		$jawaban_kunci = 'C_C_C_D_A';
		
		$jwb_siswa_array = explode('_', $jawaban_siswa);
		$jwb_kunci_array = explode('_', $jawaban_kunci);

		//print_r($jwb_siswa_array);
		//print_r($jwb_kunci_array);

		for ($i = 0; $i < 5; $i++) 
		{
	    	if($jwb_kunci_array[$i] == $jwb_siswa_array[$i])
	    		{
	    			$hasil = $hasil + 1;
	    		}
	    }

	    return $hasil;
	}

	public function get_soal($id)
	{
		$soal = Soal::find($id);
		return $soal;
	}

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

	public function list_ujian()
	{
		$list_ujiaan = DB::select("SELECT * FROM ujian");
		return view('/content/scadmin/list_ujian')->with('ujians',$list_ujiaan);
	}

	public function random(Request $request, $id)
	{
		$jml = DB::select("SELECT JUMLAH_SOAL FROM ujian WHERE KD_UJIAN = '$id'");
		return view('/content/scadmin/random')->with('jumlah',$jml);
	}

}
