@extends('layouts.app')

@section('title', 'Proyectos')

@section('content')
<div class="col-md-12">
	<br>
	<h1 class="text-center txtb">Proyectos</h1>
	<hr>
	<a href="{{ url('proyects/create')}}" class="btn btn-outline-info">
        <i class="fa fa-plus"></i> Proyecto
    </a>
    <hr>
    @foreach($proys as $proy)
    <div class="row">
	    <div class="col-md-6" style="background: url({{ asset($proy->imagen) }}) no-repeat center / cover; ">
	    </div>
	    <div class="col-md-6">
	    	<h3 class="txtb">{{ $proy->titulo }}</h3>
	    	<hr>
	    	<p class="text-justify"><strong>Informacion del Proyecto: </strong>{{ $proy->contenido }}</p>
	    	<div class="text-center">
	    		<a href="{{ url('proyects/'.$proy->id) }}" class="btn btn-primary"><i class="fa fa-search"></i></a>
                <a href="{{ url('proyects/'.$proy->id.'/edit') }}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                <form action="{{ url('proyects/'.$proy->id) }}" method="post" style="display: inline-block">
					@method('delete')
					@csrf
					<button class="btn btn-danger btn-delete" type="button"> 
						<i class="fa fa-trash"></i> 
					</button>
				</form>
	    	</div>
	    </div>
    </div>
    <br>
    @endforeach
</div>
@endsection