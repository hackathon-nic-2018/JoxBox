<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    //
    protected $table = 'offers';
  	protected $fillable = ['nombre'];

    public function category()
   {
       return $this->belongsTo('App\Category','id_categoria');
   }

    public function emplo()
    {
      return $this->belongsTo('App\Employee','id_empleado');

    }
}
