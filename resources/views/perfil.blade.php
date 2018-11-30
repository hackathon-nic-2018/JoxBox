@extends('layouts.principal')
@section('title','Perfil')
@section('content')
	<div class="col-md-8 col-md-offset-2">
		@if( Auth::user()->type == 'empleador')	

	<!-- form create empleador-->
	{!! Form::open(['route' =>'empleador.store','method'=>'POST','files'=>true]) !!}
			
	<div class="form-group col-md-6">

		{!!form::label('Nombre:')!!}
		{!!form::text('nombre',null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Escriba su nombre'])!!}
	</div>

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
			<!-- form create empleado-->
			<div class="col-md-12">
				<h3 class="dark-grey">Registra tu Perfil</h3>
				{!! Form::open(['route' => 'empleado.store' , 'method' =>'POST','files' => true]) !!}
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group col-lg-6">
					<label>Nombres:</label>
					<input type="text" name="nombre" class="form-control" id="" value="" placeholder="Juan">
				</div>

				<div class="form-group col-lg-6">
					<label>Apellidos:</label>
					<input type="text" name="apellido" class="form-control" id="" value="" placeholder="Gomez">
				</div>

				<div class="form-group col-lg-6">
					<label>Cedula:</label>
					<input type="text" name="cedula" class="form-control" id="" value="" placeholder="161-130990-0007Y">
				</div>
				<div class="form-group col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label>Foto:</label>
						<input type="file" name="foto" class="form-control">
					</div>
				</div>
				<div class=" form-group col-lg-6 col-sm-6 col-md-6 col-xs-12">
					<div class="form-group">
						<label>Record Policia:</label>
						<input type="file" name="record_policia" class="form-control">
					</div>
				</div>
				<div class="form-group col-lg-6">
					<div class="form-group">
						<label>Profesion:</label>
						<input type="text" name="profesion" class="form-control" id="" value="" placeholder="Ingeniero en Sistemas">
					</div>
				</div>
				<div class="form-group col-lg-4">
					<div class="form-group">
						<label>Ciudad:</label>
						<select name="ciudad" id="ciudad">
							<option value="Esteli">Esteli</option>
							<option value="Managua">Managua</option>
							<option value="Matagalpa">Matagalpa</option>
							<option value="Jinotega">Jinotega</option>
							<option value="Leon">Leon</option>
						</select>
					</div>
				</div>
				<div class="form-group col-lg-4">
					<div class="form-group">
						<label>Municipio:</label>
						<select name="municipio" id="municipio">
							<option value="Esteli">Esteli</option>
							<option value="Managua">Managua</option>
							<option value="Matagalpa">Matagalpa</option>
							<option value="Jinotega">Jinotega</option>
							<option value="Leon">Leon</option>
						</select>
					</div>
				</div>
				<div class="form-group col-lg-4">
					<div class="form-group">
						<label>Nivel Academico:</label>
						<select name="nivel_academico" id="nivel_academico">
							<option value="Bachiller">Bachiller</option>
							<option value="Tecnico">Tecnico</option>
							<option value="Universitario">Universitario</option>
							<option value="Egresado">Egresado</option>
						</select>
					</div>
				</div>
				<div class="form-group col-lg-6">
					<div class="form-group">
						<label>Telefono:</label>
						<input type="text" name="telefono" class="form-control" id="" value="" placeholder="88888888">
					</div>
				</div>
			</div>
			<div class="col-md-5" align="text-center">
				<input name="_token" value="{{ csrf_token() }}" type="hidden"></input>
				<button class="btn btn" type="submit" id="botones">Guardar</button>
			</div>
			{{Form::close()}}
		@endif
	</div>	
@endsection()
@section('script')