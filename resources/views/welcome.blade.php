@extends("layouts.app")

@section('title', 'Inicio')

@section('content')
<h1><span><i class="far fa-newspaper"></i> Noticias Más Recientes</span> </h1>
<br>
<ul class="carrousel">
    @foreach($slides as $sindex => $slide)
    <li style="background: url({{ asset($slide->imagen) }}) no-repeat center;">
        <div class="content">
            <h2>{{ $slide->titulo }}</h2>
            <p>{{ $slide->contenido }}</p>
            @foreach($tids as $tindex => $tid)
                <?php if ($tindex == $sindex ): ?>
                    <br>
                    <a class="btn btn-blue" href="{{ url('tidings/'.$tid->id) }}">Ver Mas</a> 
                    <br><br><br>
                <?php endif ?>
            @endforeach
        </div>
    </li>
    @endforeach
</ul>
<br>
<div class="social">
    <h1><span><i class="far fa-share-square"></i> Nuestras Redes Sociales</span></h1>
    <br>
    <iframe class="facebook" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Facopiseccionalcaldas%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="565" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
    <div class="twitter">
        <a class="twitter-timeline" href="https://twitter.com/AcopiCaldas?ref_src=twsrc%5Etfw">Tweets by AcopiCaldas</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
</div>
<div style="width: 542px; position: relative; left: 750px; top: -450px; height: 0px;">
    <h1><span><i class="fab fa-youtube"></i> Nuestro Canal de YouTube</span></h1>
    <br>
    <iframe width="540" height="315" src="https://www.youtube.com/embed/videoseries?list=PL6sOeKeGy4xnkhfN5KPaj5szy5K7fgXjm" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
<div class="" style="width: 542px; position: relative; left: 750px; top: -722px; height: 0px; align-items: center; justify-content: center;">
    <h1><span><i class="fa fa-users"></i> Mas Sobre Nosotros Aqui</span></h1>
    <br>
    <a class="right" href="{{ url('tidings') }}"><i class="far fa-newspaper"></i> Nuestras Noticias</a>
    <br>
    <br>
    <br>
    <br>
    <a type="" class="right" href="{{ url('images_gallery') }}"><i class="far fa-calendar-alt"></i> Eventos Sistema Moda </a>
</div>

@push('scripts')

@endpush

@endsection