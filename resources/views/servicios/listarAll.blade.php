@extends('layouts.principal')
@section('title','Todos los servicios')
<div id="app" style="padding-top: 90px;">
	@foreach($ofertaAll as $f)
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, culpa quibusdam! Sit, architecto qui nisi et quo, aspernatur quae suscipit reprehenderit, ullam velit animi, iste ducimus sapiente modi earum nesciunt.</p>
		{{$f->emplo->nombre}}
		{{$f->id}}
	@endforeach
</div>
@section('content')
@section('script')

@endsection