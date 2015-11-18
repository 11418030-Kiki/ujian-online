<?php namespace App\\Models;

use Illuminate\Database\Eloquent\Model;

class MapelToJurusanMapping extends Model {

	//
	protected $primaryKey = 'ID_MAPEL';
	protected $table = 'mapel_to_jurusan_mapping';
	protected $fillable = array('ID_MAPEL', 'NAMA', 'KD_JURUSAN', 'KD_MAPEL', 'KETERANGAN', 'ISVISIBLE');

}
