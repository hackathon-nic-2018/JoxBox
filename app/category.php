<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $table = 'categories';
  	protected $fillable = ['nombre'];

  	public function categoria(){
       return $this->hasMany('App\Category');
    }


}
