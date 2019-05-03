@extends('layouts.app')

@section('title', 'Modificar Noticia')

@section('content')
<div class="col-md-8 offset-2">
	<br>
	<h1 class="text-center"> <i class="fa fa-pencil-alt"></i> Modificar Noticia </h1>
	<hr>
  	<ol class="breadcrumb">
    	<li class="breadcrumb-item"><a href="{{ url('tidings') }}">Lista de Noticias</a></li>
    	<li class="breadcrumb-item active" aria-current="page">Modificar Noticia</li>
  	</ol>
  {{-- @include('layouts.validation_errors') --}}
  	<form action="{{ url('tidings/'.$tids->id) }}" method="post" enctype="multipart/form-data">
  		@method('put')
		  {!! csrf_field() !!}
  		<div class="form-group">
  			<input type="hidden" name="id" value="{{ $tids->id }}">
  			<input type="text" name="titulo" class="form-control" placeholder="Título" value="{{ $tids->titulo }}">
  		</div>
  		<div class="form-group">
			<input type="file" class="form-control d-none" accept="image/*" name="imagen">
			<button class="btn btn-outline-primary btn-block btn-upload" type="button">
				<i class="fa fa-upload"></i> Seleccionar Imagen...
			</button>
		</div>
  		<div class="form-group">
  			<textarea name="contenido" cols="30" rows="4" class="form-control" placeholder="Contenido">{{ $tids->contenido }}</textarea>
  		</div>
  		<div class="form-group">
  			<button type="submit" class="btn btn-outline-success"> Modificar </button>
  		</div>
  	</form>
</div>
@endsection