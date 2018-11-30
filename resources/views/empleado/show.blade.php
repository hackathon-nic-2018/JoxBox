@extends('layouts.principal')

@section('content')
<br><br><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" >
			<!--menu taps para mostrar perfil empleado-->
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Datos generales</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Datos academicos</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Datos</a>
				  </li>
			</ul>

			<!--body taps-->
			<div class="tab-content" id="myTabContent">
				  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Perfil</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="/img/usuario/{{$empleado->foto}}" class="img-circle img-responsive"> </div>

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
						<a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						
					</span>
				</div>
			</div>

				  </div>
				  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
				  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
			</div>
			<!--fin body taps-->
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

		<div class="col-lg-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Ofrecer un servicio</h3>
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

<script  type="text/javascript">
	$(document).ready(function(){
		listCursos();
	});
      // paginacion
      $(document).on("click", ".pagination li a", function(e){
      	e.preventDefault();

      	var url = $(this).attr('href');

      	$.ajax({
      		type: 'get',
      		url: url,
      		success: function(data){
      			$('#listar-cursos').empty().html(data);
      		}
      	});
      });
      // listar-cursosvar listCursos = function()
      {

      	$.ajax({
      		type:'get',
      		url: '{{url('listallcursos')}}',
      		success: function(data){
      			$('#listar-cursos').empty().html(data);
      		}
      	});
      }

      $('#Grabar').click(function(event)
      {
      	var curso = $('#curso').val();
      	var fecha_inicio = $('#fecha_inicio').val();
      	var fecha_fin = $('#fecha_fin').val();
      	var estado = $('#estado').val();
      	var token = $("input[name=_token]").val();
      	var route = "{{route('curso.store')}}";

      	$.ajax({
      		url : route ,
      		headers: {'X-CSRF-TOKEN':token},
      		type: 'post',
      		datatype : 'json' ,
      		data: {curso: curso,fecha_inicio: fecha_inicio, fecha_fin: fecha_fin,estado: estado},
      		success:function(data)
      		{
      			if (data.success == 'true')
      			{

              // alert('Comentario Guardado Correctamente');
              // $('#save').fadeOut(1500);
              $('#curso').val('');
              $('#modal-create').modal('toggle');
              // $('#message-save').fadeIn(1500);
              $('#message-save').show().delay(2000).fadeOut(2);
              listCursos();

          }
      },
      error:function(data)
      {
            // console.log(data.responseJSON.comentario);
            $("#error").html(data.responseJSON.curso);
            $('#message-error').show().delay(2000).fadeOut(2);
        }
    })

      });




      // guardar




      
      // cuando se cierra la ventana modal
      


  </script>
</script>
@endsection