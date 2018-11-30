@extends('layouts.principal')

@section('content')
<br><br><br><br><br>


<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" >
				<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Perfil</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="/img/usuario/{{$empleado->foto}}" class=""> </div>

						<div class=" col-md-9 col-lg-9 "> 
							<table class="table table-user-information">
								<tbody>
									<tr>
										<td>Nombre:</td>
										<td>{{$empleado->nombre}} {{$empleado->apellido}}</td>
									</tr>
									<tr>
										<td>Cedula:</td>
										<td>{{$empleado->cedula}}</td>
									</tr>
									<tr>
										<td>Ciudad:</td>
										<td>{{$empleado->ciudad}}</td>
									</tr>
									<tr>
										<tr>
											<td>Municipio:</td>
											<td>{{$empleado->municipio}}</td>
										</tr>
										<tr>
											<td>Telefono</td>
											<td>{{$empleado->telefono}}</td>
										</tr>
										<tr>
											<td>Profesion</td>
											<td>{{$empleado->profesion}}</td>
										</tr>

									</tr>

								</tbody>
							</table>

							
							
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<span class="pull-right">
						<a href="#" style="margin-top: 40px;" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-warning">Editar<i class="glyphicon glyphicon-edit"></i></a>
						
					</span>
					<!--btn modal create-->
					<span class="pull-left" >
						<a class="btn btn-primary" style="margin-top: 40px;" href="#" data-toggle='modal' data-target='#myModalServicio'>Agregar servicio
				              
				        </a>
				        <!-- modal create servicio-->
				        @include('servicios.createServicio')
				        <!-- fin-->

					</span>
				</div>
			</div>
		</div>

		@include('empleado.cursos')
		<div class="col-lg-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Agregar datos academicos</h3>
				</div>
				<div class="panel-body">
					<button type="button" class="btn btn-sm btn-primary btn-primary" data-target="#modal-create" data-toggle="modal"><em class="fa fa-pencil">Agregar</em></button>
				</div>
			</div>
			<br>
		</div>


		
		<div class="col-lg-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Datos Academicos</h3>
				</div>
				<div class="panel-body">
					<div class=" col-md-3 col-lg-3 "> 
						<table class="table table-user-information">
							<tbody>
								@foreach ($curso as $c)
								<tr>
									<td>Curso:</td>
									<td>{{$c->curso}}</td>
								</tr>
								<tr>
									<td>Fecha Inicio:</td>
									<td>{{$c->fecha_inicio}}</td>
								</tr>
								<tr>
									<td>Fecha fin:</td>
									<td>{{$c->fecha_fin}}</td>
								</tr>
								<tr>
									<tr>
										<td>Estado:</td>
										<td>{{$c->estado}}</td>
									</tr>
									
								</tr>
								

							</tbody>
							@endforeach
						</table>
					</div>
				</div>
			</div>
			<br>
		</div>
	</div>
</div>

@endsection