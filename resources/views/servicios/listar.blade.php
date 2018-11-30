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
				


				<select name="type" id="type" class="form-control" onchange="redireccion2();" id="depto" class="form-control">
					<option value="">Seleccionar opción</option>
					<option value="Esteli">Esteli</option>
					<option value="Managua">Managua</option>
				</select>
				<select name="type" id="type" class="form-control" onchange="redireccion();" id="categoria" class="form-control">
					@foreach ($categoria as $c)
					<option value="{{$c->nombre}}">{{$c->nombre}}</option>
					@endforeach
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


<script type="text/javascript">
	
	
	var nombre= $('#nombre').val();
		//var depto=$('#depto option:selected').val();
		var depto=$('#captura2 option:selected').val();


		var auxiliar= nombre+ '/'+;depto;
		console.log(auxiliar);
	//var auxiliar3= auxiliar + '/'+cap;
	var ruta='/buscar/'+ auxiliar;
	window.location.href=ruta;


</script>

@endsection
