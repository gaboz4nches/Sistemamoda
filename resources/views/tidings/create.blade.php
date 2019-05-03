@extends('layouts.app')

@section('title', 'Adicionar Noticia')

@section('content')
<h1 class="text-center txtb"><span><i class="fa fa-plus"></i> Adicionar Noticia</span></h1>

<form action="{{url('tidings')}}" class="intern" method="post" enctype="multipart/form-data">
	{!! csrf_field() !!}
	<br>
	<label>Titulo de la Noticia:</label>
	<input type="text" name="titulo" class="field" value="{{old('file')}}">
	<br>
	<div class="form-group">
		<input type="file" style="visibility: hidden;" accept="image/*" name="imagen">
		<button class="img btn-upload" type="button">
			<i class="fa fa-upload"></i> Seleccionar Imagen...
		</button>
	</div>
	<br>
	<label>Contenido de la Noticia:</label>
	<textarea class="field" name="contenido" id="" cols="30" rows="10" value="{{old('file')}}"></textarea>
	<br><br>
	<button class="send" type="submit" value="Save">Adicionar <i class="fas fa-check"></i></button>
</form>
@endsection