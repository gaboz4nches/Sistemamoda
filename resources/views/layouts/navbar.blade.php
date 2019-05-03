<nav>
    <div class="logo">
        <img src="{{ URL::asset('imgs/SistemaModa.png') }}" width="270" height="100" class="d-inline-block" alt="">
    </div>
    <ul>
        <li>
           <a class=" {{ Request::is("/") ? 'active' : '' }}" id="act1" href="{{ url('/') }}">Inicio</a>    
        </li>
        <li>
            <a class="" href="#" id="navbarDropdown act6" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Eventos</a>
            {{-- <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('video_gallery') }}">Videos</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('images_gallery') }}">Imagenes</a>
            </div>  --}}
        </li>
        <li>
            <a class=" {{ Request::is("affiliated_companies") ? 'active' : '' }}" id="act3" href="{{ url('affiliated_companies') }}">Instituciones</a>
        </li>
        <li>
            <a class=" {{ Request::is("proyects") ? 'active' : '' }}" id="act3" href="{{ url('proyects') }}">Proyectos</a>
        </li>
        <li>
            <a class=" {{ Request::is("associations") ? 'active' : '' }}" id="act3" href="{{ url('associations') }}">¿ Como agremiarme ?</a>
        </li>
        <li>
            <a class=" {{ Request::is("contacts") ? 'active' : '' }}" id="act3" href="{{ url('contacts') }}">Contactenos</a>
        </li>
    </ul>
</nav>