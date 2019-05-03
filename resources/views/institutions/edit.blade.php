<!-- @extends('layouts.app')

@section('title', 'Modificar Institucion')

@section('content')
<div class="col-md-8 offset-2">
  <br>
  <h1 class="text-center"> <i class="fa fa-pencil-alt"></i> Modificar Institucion </h1>
  <hr>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('affiliated_companies') }}">Lista de Instituciones</a></li>
      <li class="breadcrumb-item active" aria-current="page">Modificar Institucion</li>
    </ol>
  {{-- @include('layouts.validation_errors') --}}
    <form action="{{ url('institutions/'.$inst->id) }}" method="post" enctype="multipart/form-data">
      @method('put')
      {!! csrf_field() !!}
      <div class="form-group">
       <input type="file" class="form-control d-none" accept="image/*" name="logo">
       <button class="btn btn-outline-primary btn-block btn-upload" type="button">
        <i class="fa fa-upload"></i> Seleccionar Imagen...
       </button>
      </div>
      <div class="form-group">
        <input type="hidden" name="id" value="{{ $inst->id }}">
        <input type="number" name="contacto" class="form-control" placeholder="Numero de contacto" value="{{ $inst->contacto }}">
      </div>
      <div class="form-group">
        <input type="text" name="direccion" class="form-control" placeholder="Direccion" value="{{ $inst->direccion }}">
      </div>
      <div class="form-group">
        <input type="text" name="web" class="form-control" placeholder="Sitio Web" value="{{ $inst->web }}" autocomplete="off">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-outline-success"> Modificar </button>
      </div>
    </form>
</div>
@endsection -->