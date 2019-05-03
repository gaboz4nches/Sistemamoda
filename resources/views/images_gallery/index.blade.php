@extends("layouts.app")

@section('title', 'Galeria de Eventos')

@section('content')
<div class="col-md-12">   
    <br>
    <h1 class="text-center txtb"><i class="far fa-calendar"></i> Galeria de Eventos</h1>
    <hr>
    <a href="{{ url('images_gallery/create')}}" class="btn btn-outline-info">
        <i class="fa fa-plus"></i> Evento
    </a>
    <hr>
    <div id="carousel">
        <ul class="flip-items">
            @foreach($imgas as $cimga => $imga)
                <li data-flip-title="Red">
                    <h1 class="text-center">{{$imga->titulo}}</h1>
                    <img src="{{ asset($imga->imagen) }}">
                    <hr>
                    <p class="text-justify">{{ $imga->contenido }}</p>
                    <hr>
                    <a href="{{ url('images_gallery/'.$imga->id) }}" class="btn btn-primary"><i class="fa fa-search"></i></a>
                    <a href="{{ url('images_gallery/'.$imga->id.'/edit') }}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                    <form action="{{ url('images_gallery/'.$imga->id) }}" method="post" style="display: inline-block">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger btn-delete" type="button"> 
                            <i class="fa fa-trash"></i> 
                        </button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
    <br>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        $("#carousel").flipster({
            style: 'carousel',
            spacing: -0.5,
            buttons: true,
        });
    });
</script>
@endpush
@endsection
