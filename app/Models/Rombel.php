<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rombel extends Model {

	//
	protected $primaryKey = 'KD_ROMBEL';
	protected $table = 'rombel_master';
	protected $fillable = array('KD_ROMBEL', 'NAMA_ROMBEL', 'IS_ACTIVE');
	public $timestamps = false;
}
