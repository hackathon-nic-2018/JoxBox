@extends('layouts.principal')

@section('content')
<div id="home" class="slider-area">
	<div class="bend niceties preview-2">
		<div id="ensign-nivoslider" class="slides">
			<img src="/cdn/img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
			<img src="/cdn/img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
			<img src="/cdn/img/slider/slider3.jpg" alt="" title="#slider-direction-3" />
		</div>

		<!-- direction 1 -->
		<div id="slider-direction-1" class="slider-direction slider-one">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="slider-content">
							<!-- layer 1 -->
							<div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
								<h2 class="title1">Contrata expertos para cualquier trabajo en línea. </h2>
							</div>
							<!-- layer 2 -->
							<div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
								<h1 class="title2">Tenemos representantes expertos en todos los campos técnicos, profesionales y creativos.</h1>
							</div>
							<!-- layer 3 -->
							<div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
								<a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
								<a class="ready-btn page-scroll" href="#about">Learn More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- direction 2 -->
		<div id="slider-direction-2" class="slider-direction slider-two">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="slider-content text-center">
							<!-- layer 1 -->
							<div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
								<h2 class="title1">The Best Business Information </h2>
							</div>
							<!-- layer 2 -->
							<div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
								<h1 class="title2">We're In The Business Of Get Quality Business Service</h1>
							</div>
							<!-- layer 3 -->
							<div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
								<a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
								<a class="ready-btn page-scroll" href="#about">Learn More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- direction 3 -->
		<div id="slider-direction-3" class="slider-direction slider-two">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="slider-content">
							<!-- layer 1 -->
							<div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
								<h2 class="title1">The Best business Information </h2>
							</div>
							<!-- layer 2 -->
							<div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
								<h1 class="title2">Helping Business Security  & Peace of Mind for Your Family</h1>
							</div>
							<!-- layer 3 -->
							<div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
								<a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
								<a class="ready-btn page-scroll" href="#about">Learn More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<div class="container-fluid">
	<section class="container">
		<div class="container-page">
			<div class="col-md-12">
				<div class="alert alert-danger print-error-msg" style="display:none">
					<ul></ul>
				</div> 
			</div>

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
				<button class="btn btn-primary" type="submit">Guardar</button>
			</div>
			{{Form::close()}}
			<
		</section>
	</div>
	<br>

	@endsection
	