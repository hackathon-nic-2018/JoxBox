@extends('layouts.principal')
@section('title','Perfil')
@section('content')
	<div class="col-md-8 col-md-offset-2">
		@if( Auth::user()->type == 'empleador')	
			{!! Form::open(['route' =>'empleador.store','method'=>'POST','files'=>true]) !!}
			
			<div class="form-group col-md-6">

			    {!!form::label('Nombre:')!!}
			    {!!form::text('nombre',null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Escriba su nombre'])!!}
			</div>

			<div class="form-group col-md-6">
			    {!!form::label('Apellido:')!!}
			    {!!form::text('apellido',null,['id'=>'apellido','class'=>'form-control','placeholder'=>'Escriba su apellido'])!!}
	    							   	
			</div>

			<div class="form-group col-md-6">
			    {!!form::label('Cedula:')!!}
			    {!!form::text('cedula',null,['id'=>'cedula','class'=>'form-control','placeholder'=>'Escriba su cedula'])!!}
	    							   	
			</div>

			<div class="form-group col-md-6">
			    {!!Form::label('Ciudad')!!}
			    {!!Form::select('ciudad',[''=>'Seleccionar Ciudad','esteli'=>'Estelí','managua'=>'Managua'],null,['id'=>'ciudad','class'=>'form-control'])!!}
			</div>

			<div class="form-group col-md-6">
			    {!!Form::label('Municipio')!!}
			    {!!Form::select('municipio',[''=>'Seleccionar Municipio','trinida'=>'Trinidad','condega'=>'Condega'],null,['id'=>'municipio','class'=>'form-control'])!!}
			</div>

			<div class="form-group col-md-6">
			    {!!form::label('Telefono:')!!}
			    {!!form::text('telefono',null,['id'=>'telefono','class'=>'form-control','placeholder'=>'Escriba su telefono'])!!}					   	
			</div>
			<div class="form-group col-md-6">
			    {!!form::label('Imagen:')!!}
			    {!!form::file('imagen',['class' =>'form-control'])!!}					   	
			</div>

			<div class="form-group col-md-6">
				{!!form::submit('Guardar',['name'=>'guardar','id'=>'guardar','class'=>'btn btn-primary btn-sm-mt-10'])!!}

		{!!Form::close()!!}

	</div>
		@else
			ppp
		@endif
	</div>	
@endsection()
@section('script')