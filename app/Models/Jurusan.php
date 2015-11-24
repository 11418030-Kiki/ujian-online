<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model {

	//
	protected $primaryKey = 'KD_JURUSAN';
	protected $table = 'jurusan_master';
	protected $fillable = array('KD_JURUSAN', 'NAMA_JURUSAN', 'DESKRIPSI');
	public $timestamps = false;

	public function mapelsLegacy()
    {
        return $this->hasMany('App\Models\MapelToJurusanMapping','KD_JURUSAN');
    }

     public function mapels()
    {
        return $this->belongsToMany('App\Models\Mapel','MAPEL_JURUSAN','KD_JURUSAN','KD_MAPEL');
    }
}
