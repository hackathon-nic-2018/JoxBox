<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employer extends Model
{
    //
    protected $table = 'employers';
  	protected $fillable = ['nombre','cedula'];
}
