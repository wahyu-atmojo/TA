<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
   	protected $table = 'desas';
    protected $fillable = ['id','nama'];
    public $timestamps = false;
}
