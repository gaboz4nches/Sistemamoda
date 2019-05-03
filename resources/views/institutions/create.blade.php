<!-- @extends('layouts.app')

@section('title', 'Adicionar Institucion')

@section('content')
<div class="col-md-8 offset-2">
	<br>
	<h1 class="text-center txtb"><i class="fa fa-plus"></i> Adicionar Institucion</h1>
	<hr>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{url('institutions')}}">Lista Instituciones</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Adicionar Institucion</li>
	</ol>
	{{-- @include('layouts.validation_errors') --}}
	<form action="{{url('institutions')}}" method="post" enctype="multipart/form-data">
		{!! csrf_field() !!}
		<div class="form-group">
			<input type="file" class="form-control d-none" accept="image/*" name="logo">
			<button class="btn btn-outline-primary btn-block btn-upload" type="button">
				<i class="fa fa-upload"></i> Seleccionar Imagen...
			</button>
		</div>
		<div class="form-group">
			<input type="number" name="contacto" class="form-control" placeholder="Numero de Contacto" value="{{old('file')}}">
		</div>
		<div class="form-group">
			<input type="texto" name="direccion" class="form-control" placeholder="Direccion" value="{{old('file')}}">
		</div>
		<div class="form-group">
			<input type="texto" name="web" class="form-control" placeholder="Pagina Web" value="{{old('file')}}" autocomplete="off">
		</div>
		<div class="form-group">
			<button class="btn btn-outline-success text-center" type="submit" value="Save">Adicionar</button>
		</div>
	</form>
</div>
@endsection -->