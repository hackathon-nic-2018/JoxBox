@extends('layouts.principal')

@section('content')
<br><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<!-- resumt -->
			<div class="panel panel-default">
				<div class="panel-heading resume-heading">
					<div class="row">
						<div class="col-lg-12">
							@if(Session::has('message'))
							<div class="alert alert-success alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								{{Session::get('message')}}
							</div>
							@endif
							<div class="col-xs-12 col-sm-4">
								<figure>
									<img class="img-responsive" alt="" src="/img/usuario/{{$empleado->foto}}">
								</figure>
							</div>
							<div class="col-xs-12 col-sm-8">
								<ul class="list-group">
									<li class="list-group-item"><b>Nomber: </b>{{$empleado->nombre}}</li>
									<li class="list-group-item"><b>Apellido:</b> {{$empleado->apellido}}</li>
									<li class="list-group-item"><b>Cedula:</b>{{$empleado->cedula}}</li>
									<li class="list-group-item"><b>Ciudad:</b>{{$empleado->ciudad}}</li>
									<li class="list-group-item"><b>Municipio:</b>{{$empleado->municipio}}</li>
									<li class="list-group-item"><b>Telefono:</b>{{$empleado->telefono}}</li>
									<li class="list-group-item"><b>Profesion:</b>{{$empleado->profesion}}</li>
									<li class="list-group-item"><b>Nivel Academico:</b>{{$empleado->nivel_academico}}</li>
									<li class="list-group-item"><b>Correo:</b>{{$empleado->email}}</li>

								</ul>
								@include('empleado.enviarsolicitud')
								<button type="button" class="btn btn-sm btn-primary btn-primary" data-target="#modal-create" data-toggle="modal"><em class="fa fa-pencil">Contactar</em></button>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="section"> 
						<div class="row">
							<div class="col-md-12">
								<h5>Portafolio</h5>
								@foreach($oferta as $o)
								<div class="col-md-6">
									<div class="card">
										<img class="card-img-top" src="/images/{{$o->imagen}}" alt="Card image cap" id="image">
										<div class="card-body" id="body">
											<br>
											<h5 class="card-title border-bottom pb-3"><b>Nombre: </b>{{$o->nombre}}</h5>
											<p class="card-text"><b>Descripcion:</b> {{$o->descripcion}}</p>
											<p class="card-text"><b>Ubicacion:</b> {{$o->municipio}}</p>
											<p class="card-text"><b>Profesion:</b> {{$o->profesion}}</p>
											<p class="card-text"><b>Experiencia:</b> {{$o->años_experiencia}} años</p>
											<p class="card-text"><b>Usuario:</b> {{$o->años_experiencia}} años</p>
											<button class="btn-primary">Ver Mas</button>
										</div>
									</div>
									<br>  <br>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
				
				
				
			</div>
		</div>
		<!-- resume -->

	</div>
</div>
</div>

@endsection