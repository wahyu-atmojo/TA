<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengepul extends Model
{
    protected $table = 'pengepuls';
    protected $fillable = ['id_pengepul', 'nama_pengepul' , 'id_desa', 'longitude', 'latitude', 'deskripsi', 'foto'];
}
