<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model {

	//
	protected $primaryKey = 'NIP';
	protected $table = 'guru';
	protected $fillable = array('NIP', 'NUPTK', 'NAMA', 'TEMPAT_LAHIR', 'TANGGAL_LAHIR', 'JENIS_KELAMIN', 
	'ALAMAT', 'NO_TELEPON', 'IS_ACTIVE', 'USERNAME', 'PASSWORD', 'NAMA_FILE_FOTO');
	public $timestamps = false;
}
