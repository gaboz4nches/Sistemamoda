@extends('layouts.app')

@section('title', 'Modificar Proyecto')

@section('content')
<div class="col-md-8 offset-2">
	<br>
	<h1 class="text-center"> <i class="fa fa-pencil-alt"></i> Modificar Proyecto </h1>
	<hr>
  	<ol class="breadcrumb">
    	<li class="breadcrumb-item"><a href="{{ url('proyects') }}">Lista de Proyectos</a></li>
    	<li class="breadcrumb-item active" aria-current="page">Modificar Proyecto</li>
  	</ol>
  {{-- @include('layouts.validation_errors') --}}
  	<form action="{{ url('proyects/'.$proys->id) }}" method="post" enctype="multipart/form-data">
  		@method('put')
		  {!! csrf_field() !!}
  		<div class="form-group">
  			<input type="hidden" name="id" value="{{ $proys->id }}">
  			<input type="text" name="titulo" class="form-control" placeholder="Título" value="{{ $proys->titulo }}">
  		</div>
  		<div class="form-group">
			<input type="file" class="form-control d-none" accept="image/*" name="imagen">
			<button class="btn btn-outline-primary btn-block btn-upload" type="button">
				<i class="fa fa-upload"></i> Seleccionar Imagen...
			</button>
		</div>
  		<div class="form-group">
  			<textarea name="contenido" cols="30" rows="4" class="form-control" placeholder="Contenido">{{ $proys->contenido }}</textarea>
  		</div>
  		<div class="form-group">
  			<button type="submit" class="btn btn-outline-success"> Modificar </button>
  		</div>
  	</form>
</div>
@endsection