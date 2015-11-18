<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model {

	//
	protected $primaryKey = 'KD_JURUSAN';
	protected $table = 'jurusan_master';
	protected $fillable = array('KD_JURUSAN', 'NAMA_JURUSAN', 'DESKRIPSI');
}
