<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiswaToKelasMapping extends Model {

	//
	protected $primaryKey = 'ID_SISWA_TO_KELAS';
	protected $table = 'siswa_to_kelas_mapping';
	protected $fillable = array('ID_SISWA_TO_KELAS', 'NOMOR_INDUK', 'KD_KELAS', 'START_DATE', 'END_DATE');
	public $timestamps = false;
}
