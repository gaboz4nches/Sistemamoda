@extends("layouts.app")

@section('title', 'Noticias')

@section('content')

<h1 class="text-center txtb"><span><i class="far fa-newspaper"></i> Nuestras Noticias</span></h1>
<hr>
<a href="{{ url('tidings/create')}}" class="btn btn-outline-info">
    <i class="fa fa-plus"></i> Noticia
</a>
<hr>

<div class="testimonials">
    @foreach($tids as $tid)
    <div class="card">
        <div class="layer"></div>
        <div class="content">
            <div class="details">
                <h2>{{ $tid->titulo }}</h2>
            </div>
            <p>
                {{ $tid->contenido }}
            </p>
            <div class="image">
                <img src="{{ asset($tid->imagen) }}">
            </div>
            <br>
            <ul class="buttons2">
                <li>
                    <a href="{{ url('tidings/'.$tid->id) }}" class="btn-primary">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <i class="fa fa-search"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ url('tidings/'.$tid->id.'/edit') }}" class="btn-success">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                </li>
                <li>
                    <form action="{{ url('tidings/'.$tid->id) }}" method="post" style="display: inline-block">
                        @method('delete')
                        @csrf
                        <a class="btn-delete" type="button" href="">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <i class="fa fa-trash"></i>
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    @endforeach
</div>
{{ $tids->links() }}
@endsection