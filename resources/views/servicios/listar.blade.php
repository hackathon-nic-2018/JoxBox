@extends('layouts.principal')
@section('title','Servicios')

@section('content')
<div id="app" style="padding-top: 90px;">
	<div id="portfolio" class="portfolio-area area-padding fix">
		<div class="section-headline text-center">
			<h2>Ultimos Servicios Publicados</h2>
		</div>
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
									<h5 class="card-title border-bottom pb-3"><b>Nombre: </b>{{$o->servicio}}</h5>
									<p class="card-text"><b>Descripcion:</b> {{$o->descripcion}}</p>
									<p class="card-text"><b>Ubicacion:</b> {{$o->empleado}}</p>
									
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
