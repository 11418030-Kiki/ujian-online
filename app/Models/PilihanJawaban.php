<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PilihanJawaban extends Model {

	//
	protected $primaryKey = 'ID_PILIHAN_JAWABAN';
	protected $table = 'pilihan_jawaban';
	protected $fillable = array('ID_PILIHAN_JAWABAN', 'KD_UJIAN', 'ID_SOAL', 'KD_PILIHAN', 'PILIHAN_JAWABAN');
	public $timestamps = false;
	
}
