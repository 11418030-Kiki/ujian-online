<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuruToUjianMapping extends Model {

	//
	protected $primaryKey = 'ID_GURU_TO_UJIAN';
	protected $table = 'guru_to_ujian_mapping';
	protected $fillable = array('ID_GURU_TO_UJIAN', 'NIP', 'KD_UJIAN', 'ID_STATUS');

}
