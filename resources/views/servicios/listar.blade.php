@extends('layouts.principal')
@section('title','Servicios')
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
					<div align="center">
						<div class="col-md-5">
							<button class="btn btn-primary">Ver Todas</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@section('content')
@section('script')

@endsection
