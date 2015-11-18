<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProsesUjian extends Model {

	//
	protected $primaryKey = 'ID_PROSES_UJIAN';
	protected $table = 'proses_ujian';
	protected $fillable = array('ID_PROSES_UJIAN', 'NOMOR_INDUK', 'KD_UJIAN', 'NILAI', 'JAWABAN_SISWA', 'JAWABAN_BENAR', 'JUMLAH_MENJAWAB');
}
