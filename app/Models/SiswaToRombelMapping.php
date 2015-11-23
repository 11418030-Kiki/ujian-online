<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiswaToRombelMapping extends Model {

	//
	protected $primaryKey = 'ID_SISWA_TO_ROMBEL';
	protected $table = 'siswa_to_rombel_mapping';
	protected $fillable = array('ID_SISWA_TO_ROMBEL', 'KD_ROMBEL', 'NOMOR_INDUK', 'START_DATE', 'END_DATE');
	public $timestamps = false;
}
