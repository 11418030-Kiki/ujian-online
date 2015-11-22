<?php namespace App\\Models;

use Illuminate\Database\Eloquent\Model;

class StatusGuruToUjian extends Model {

	//
	protected $table = 'status_guru_to_ujian';
	protected $primaryKey = 'ID_STATUS';
	protected $fillable = array('ID_STATUS, NAMA_STATUS, KETERANGAN');
	public $timestamps = false;
}
