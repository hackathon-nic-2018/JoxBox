@extends('layouts.principal')
@section('title','Servicios')
<div id="app" style="padding-top: 90px;">
	<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">Servicios</h5>
	        <div class="row">
	            <!-- Servicios -->
	            @foreach($oferta as $f)
	            <div class="col-xs-12 col-sm-6 col-md-4">
	                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
	                    <div class="mainflip">        	
	                        <div class="frontside">
	                            <div class="card">
	                                <div class="card-body text-center">
	                                    <p><img class=" img-fluid" src="/images/{{$f->imagen}}" alt="card image"></p>
	                                    <h4 class="card-title">{{$f->categoria}}</h4>
	                                    <p class="card-text">{{$f->empleado}}</p>
	                                    <a href="#" class="btn btn-primary btn-sm">
	                                    	<i class="far fa-star"></i></a>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="backside">
	                            <div class="card">
	                                <div class="card-body text-center mt-4">
	                                	<p><img class=" img-fluid" src="/images/{{$f->imagen}}" alt="card image"></p>
	                                    <h4 class="card-title">{{$f->categoria}}</h4>
	                                    <p class="card-text">{{$f->descripcion}}</p>
	                        
	                                    <ul class="list-inline" style="padding-bottom: 20px;">
	                                        <li class="list-inline-item">
	                                            <a class="social-icon text-xs-center" target="_blank" href="/listar/{{$f->id}}">
	                                            	<span class="btn btn-primary">Ver más</span>

	                                            </a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                        
	                    </div>
	                </div>
	            </div>
	            @endforeach
	        </div>
    </div>
</section>
</div>
@section('content')
@section('script')

@endsection
