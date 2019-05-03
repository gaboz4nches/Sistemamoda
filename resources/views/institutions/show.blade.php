<!-- @extends('layouts.app')

@section('title', 'Consultar Institucion')

@section('content')
	<div class="col-md-8 offset-2">
		<br>
		<h1 class="text-center txtb"><i class="fa fa-search"></i> Consultar Institucion </h1>
		<hr>
		<ol class="breadcrumb">
	    	<li class="breadcrumb-item"><a href="{{ url('institutions') }}">Lista de Institucion</a></li>
	    	<li class="breadcrumb-item active">Consultar Institucion</li>
	  	</ol>
		<table class="table table-striped table-hover">
			<tr>
				<th> Imagen: </th>
				<td> <img src="{{ asset($inst->imagen) }}" width="120px" style="cursor: zoom-in;"> </td>
			</tr>
			<tr>
				<th> Nombre: </th>
				<td> {{ $inst->titulo }} </td>
			</tr>
			<tr>
				<th> Contenido: </th>
				<td> {{ $inst->contenido }} </td>
			</tr>
			<?php 
				\Carbon\Carbon::setLocale(config('app.locale'));
				$hoy = \Carbon\Carbon::now();
				$fc = \Carbon\Carbon::parse($inst->created_at);
			?>
			<tr>
				<th> Creado: </th>
				<td> {{ $fc->diffForHumans($hoy) }} </td>
			</tr>
		</table>
		<br>
	</div>

@endsection -->