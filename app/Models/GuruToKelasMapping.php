<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuruToKelasMapping extends Model {

	//
	protected $primaryKey = 'ID_GURU_TO_KELAS';
	protected $table = 'guru_to_kelas_mapping';
	protected $fillable = array('ID_GURU_TO_KELAS', 'NIP', 'KD_KELAS','ID_STATUS', 'START_DATE','END_DATE');
	public $timestamps = false;
}
