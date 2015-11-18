<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuruToMapelMapping extends Model {

	//
	protected $primaryKey = 'ID_GURU_TO_MAPEL';
	protected $table = 'guru_to_mapel_mapping';
	protected $fillable = array('ID_GURU_TO_MAPEL','ID_MAPEL','NIP', 'START_DATE', 'END_DATE');
}
