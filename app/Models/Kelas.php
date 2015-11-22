<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model {

	//
	protected $primaryKey = 'KD_KELAS';
	protected $table = 'kelas_master';
	protected $fillable = array('KD_KELAS', 'NAMA', 'IS_VISIBLE', 'TINGKAT');
	public $timestamps = false;
}
