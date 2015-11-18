<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model {

	//
	protected $primaryKey = 'NOMOR_INDUK';
	protected $table = 'siswa';
	protected $fillable = array('NOMOR_INDUK', 'KD_JURUSAN', 'NISN', 'NAMA', 'TEMPAT_TGL_LAHIR', 'JENIS_KELAMIN', 'ALAMAT', 'NO_TELEPON', 'IS_ACTIVE', 'USERNAME', 'PASSWORD', 'NAMA_FILE_FOTO');
}
