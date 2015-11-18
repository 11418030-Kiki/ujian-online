<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model {

	//
	protected $table = 'ujian';
	protected $primaryKey = '';
	protected $fillable = array('KD_UJIAN', 'ID_MAPEL', 'NAMA_UJIAN', 'JUMLAH_SOAL', 'KUNCI_JAWABAN', 'IS_ACTIVE', 'SEMESTER', 'KETERANGAN', 'START_DATETIME', 'END_DATETIME', 'LIST_RANDOM', 'JUMLAH_PILIHAN');
}
