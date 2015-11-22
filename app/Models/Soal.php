<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model {

	//
	protected $table = 'soal';
	protected $primaryKey = 'ID_SOAL';
	protected $fillable = array('ID_SOAL', 'KD_UJIAN', 'SOAL', 'NOMOR', 'POINT', 'KUNCI_JAWABAN');
	public $timestamps = false;
}
