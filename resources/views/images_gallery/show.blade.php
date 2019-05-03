@extends('layouts.app')

@section('title', 'Consultar Evento')

@section('content')
	<div class="col-md-8 offset-2">
		<br>
		<h1 class="text-center txtb"><i class="fa fa-search"></i> Consultar Evento </h1>
		<hr>
		<ol class="breadcrumb">
	    	<li class="breadcrumb-item"><a href="{{ url('images_gallery') }}">Galeria de Eventos</a></li>
	    	<li class="breadcrumb-item active">Consultar Evento</li>
	  	</ol>
		<table class="table table-striped table-hover">
			<tr>
				<th> Imagen: </th>
				<td> <img src="{{ asset($imgas->imagen) }}" width="120px" style="cursor: zoom-in;"> </td>
			</tr>
			<tr>
				<th> Título: </th>
				<td> {{ $imgas->titulo }} </td>
			</tr>
			<tr>
				<th> Contenido: </th>
				<td> {{ $imgas->contenido }} </td>
			</tr>
			<?php 
				\Carbon\Carbon::setLocale(config('app.locale'));
				$hoy = \Carbon\Carbon::now();
				$fc = \Carbon\Carbon::parse($imgas->created_at);
			?>
			<tr>
				<th> Creado: </th>
				<td> {{ $fc->diffForHumans($hoy) }} </td>
			</tr>
		</table>
		<br>
	</div>

@endsection