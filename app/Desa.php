<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
	public function pengepuls() {
		return $this->hasMany('App\Pengepul');
	}
   	protected $table = 'desas';
    protected $fillable = ['id','nama'];
    public $timestamps = false;
}
