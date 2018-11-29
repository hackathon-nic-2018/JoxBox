<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
	protected $fillable = [
		'nombre', 'apellido', 'cedula', 'municipio', 'ciudad', 'telefono', 'id_usuario', 'profesion', 'nivel_academico', 'record_policia', 'foto'];
}
