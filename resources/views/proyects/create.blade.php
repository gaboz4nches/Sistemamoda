@extends('layouts.app')

@section('title', 'Adicionar Proyecto')

@section('content')
<div class="col-md-8 offset-2">
	<br>
	<h1 class="text-center txtb"><i class="fa fa-plus"></i> Adicionar Proyecto</h1>
	<hr>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{url('proyects')}}">Lista Proyectos</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Adicionar Proyecto</li>
	</ol>
	{{-- @include('layouts.validation_errors') --}}
	<form action="{{url('proyects')}}" method="post" enctype="multipart/form-data">
		{!! csrf_field() !!}
		<div class="form-group">
			<input type="file" class="form-control d-none" accept="image/*" name="imagen">
			<button class="btn btn-outline-primary btn-block btn-upload" type="button">
				<i class="fa fa-upload"></i> Seleccionar Imagen...
			</button>
		</div>
		<div class="form-group">
			<input type="text" name="titulo" class="form-control" placeholder="Titulo del Proyecto" value="{{old('file')}}">
		</div>
		<div class="form-group">
			<textarea class="form-control" name="contenido" id="" cols="30" rows="10" value="{{old('file')}}"></textarea>
		</div>
		<div class="form-group">
			<button class="btn btn-outline-success text-center" type="submit" value="Save">Adicionar</button>
		</div>
	</form>
</div>
@endsection