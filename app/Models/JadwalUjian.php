<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalUjian extends Model {

	//
	protected $primaryKey = 'ID_JADWAL_UJIAN';
	protected $table = 'jadwal_ujian';
	protected $fillable = array('ID_JADWAL_UJIAN', 'KD_UJIAN', 'KD_ROMBEL', 'KD_RUANGAN', 'START_DATETIME', 'END_DATETIME', 'IS_ACTIVE');
	public $timestamps = false;
}
