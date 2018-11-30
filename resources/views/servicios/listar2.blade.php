@extends('layouts.principal')
@section('title','Servicios')

@section('content')
<div id="app" style="padding-top: 90px;">
	<div id="portfolio" class="portfolio-area area-padding fix">
		<div class="section-headline text-center">
			<h2>Servicios Disponibles</h2>
		</div>

		<nav class="navbar navbar-light bg-light" style="text-align: center;">
			<form class="form-inline">
				<input class="form-control mr-sm-2" type="search" placeholder="Buscar"></input>


				<select name="type" id="type" class="form-control">
					<option value="">Seleccionar opción</option>
					<option value="empleado">Esteli</option>
					<option value="empleador">Managua</option>
				</select>
				<button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
			</form>

		</nav>

		<div class="container">
			<div class="section"> 
				<div class="row">
					<div class="col-md-12">
						@foreach($oferta as $o)
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" src="/images/{{$o->imagen}}" alt="Card image cap" id="image">
								<div class="card-body" id="body">
									<br>
									<h5 class="card-title border-bottom pb-3">{{$o->servicio}}</h5>
									<p class="card-text"><b>Descripcion:</b> {{$o->descripcion}}</p>
									<p class="card-text"><b>Ubicacion:</b> {{$o->ciudad}}</p>
									<p class="card-text"><b>Usuario:</b> {{$o->empleado}}</p>
									
									<a class="btn btn-primary" href="servicios/{{$o->id}}"> Ver mas</a>
									
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

@section('script')
@endsection
