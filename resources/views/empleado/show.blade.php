@extends('layouts.principal')

@section('content')
<br>
<br>
<br>
<br>
<br>

<div class="contaier">
	
	<div class="card" id="cardperfil">
		<div class="col-md-12">
			<div class="col-md-2">
				<img src="/img/usuario/{{ $empleado->foto }}" alt="">
			</div>
			<div class="col-md-4">
				<h3>{{$empleado->nombre}} {{$empleado->apellido}}</h3>
			</div>
			<div class="col-md-4">
				<h3>{{$empleado->nombre}} {{$empleado->apellido}}</h3>
			</div>
		</div>



	</div>
	
</div>


@endsection