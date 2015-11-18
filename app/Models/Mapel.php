<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model {

	//
	protected $primaryKey = 'KD_MAPEL';
	protected $table = 'mapel_master';
	protected $fillable = array('KD_MAPEL','NAMA_MAPEL');
}
