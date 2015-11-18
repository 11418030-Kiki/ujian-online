<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RuanganMaster extends Model {

	//
	protected $primaryKey = 'KD_RUANGAN';
	protected $table = 'ruangan_master';
	protected $table = array('KD_RUANGAN', 'NAMA_RUANGAN');
}
