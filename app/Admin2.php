<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin2 extends Model
{
    //
    protected $table = 'admins';
    protected $fillable = ['nama', 'password'];
}
