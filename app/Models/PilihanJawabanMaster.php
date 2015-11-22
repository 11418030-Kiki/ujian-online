<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PilihanJawabanMaster extends Model {

	//
	protected $primaryKey = 'KD_PILIHAN';
	protected $table = 'pilihan_jawaban_master';
	protected $fillable = array('KD_PILIHAN', 'NAMA_PILIHAN');
	public $timestamps = false;
}
