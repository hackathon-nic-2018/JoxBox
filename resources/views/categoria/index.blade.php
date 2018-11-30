@extends('admin.panel')
@section('title','Categoria')
@section('content')
	<div class="col-md-10 col-md-offset-2">
<<<<<<< HEAD
		<!--btn modal create-->
=======
>>>>>>> 78ac8ac26e2c359a3196b6d303d61b96d4a07ad9
		<a class="btn btn-primary" style="margin-bottom: 20px;" href="#" data-toggle='modal'
                           data-target='#myModal'>
                            <span> Agregar <i class="fas fa-plus-circle"></i></span>
        </a>
<<<<<<< HEAD
        <!-- modal create-->
        @include('categoria.createModal')

		<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Id</th>
			      <th scope="col">Nombre</th>
			      <th scope="col">Imagen</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<!--lista de categorias-->
			  	@foreach($categoria as $c)
				    <tr>
				      <th scope="row">{{$c->id}}</th>
				      <td>{{$c->nombre}}</td>
				      <td>
				      	<img src="/images/{{$c->imagen}}" alt="" style="width: 50px;height: 50px;">
				      </td>
				    </tr>
			    @endforeach
			  </tbody>
		</table>
=======
        @include('categoria.createModal')

	<table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">Id</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Imagen</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($categoria as $c)
			    <tr>
			      <th scope="row">{{$c->id}}</th>
			      <td>{{$c->nombre}}</td>
			      <td>
			      	<img src="/images/{{$c->imagen}}" alt="" style="width: 50px;height: 50px;">
			      </td>
			    </tr>
		    @endforeach
		  </tbody>
	</table>
>>>>>>> 78ac8ac26e2c359a3196b6d303d61b96d4a07ad9
	</div>
@endsection()
