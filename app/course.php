<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $fillable = [
		'curso', 'fecha_inicio', 'fecha_fin', 'estado'];
}
