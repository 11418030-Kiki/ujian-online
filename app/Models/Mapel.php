<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model {

	//
	protected $primaryKey = 'KD_MAPEL';
	protected $table = 'mapel_master';
	protected $fillable = array('KD_MAPEL','NAMA_MAPEL');
	public $timestamps = false;

	public function jurusan()
	{
		//return $this->belongsTo('Model\Jurusan', 'foreign_key', 'other_key');
    	return $this->belongsTo('App\Models\Jurusan','KD_JURUSAN');
	}

	public function jurusans()
	{
		return $this->belongsToMany('App\Models\Jurusan','mapeltojurusanmapping','KD_MAPEL','KD_JURUSAN');
	}

}
