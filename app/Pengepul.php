<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengepul extends Model
{
	
    // protected $table = 'pengepuls';
    protected $fillable = [
    	'nama_pengepul' , 
    	'id_desa', 
    	'longitude', 
    	'latitude', 
    	'alamat', 
    	'deskripsi', 
    	'foto'
    ];
    
    public function desas(){
		return $this->belongsTo('App\Desa', 'id_desa');
	}
}
