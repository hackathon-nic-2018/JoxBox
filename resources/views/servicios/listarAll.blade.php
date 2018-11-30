@extends('layouts.principal')
@section('title','Todos los servicios')
<div id="app" style="padding-top: 90px;">
	<div id="portfolio" class="portfolio-area area-padding fix">
		<div class="section-headline text-center">
			<h2>Detalle de Servicio</h2>
		</div>
		<div class="container">
			<div class="section"> 
				<div class="row">
					<div class="col-md-12">
						@foreach($ofertaAll as $o)
						<div style="padding-left: 190px;">
							<div class="card">
								<img class="card-img-top" src="/images/{{$o->imagen}}" alt="Card image cap" id="image">
								<div class="card-body" id="body">
									<br>
									<h5 class="card-title border-bottom pb-3"><b>Nombre: </b>
										{{$o->nombre}}</h5>
									<p class="card-text"><b>Categoria:</b>{{$o->category->nombre}}</p>
									<p class="card-text"><b>Descripcion:</b> {{$o->descripcion}}</p>
									<p class="card-text"><b>Ubicacion:</b> {{$o->emplo->ciudad}}</p>
									
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

