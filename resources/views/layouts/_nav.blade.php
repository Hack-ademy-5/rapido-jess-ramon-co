<nav class="navbar navbar-expand-lg backcolor-nav sticky-top">
    <div class="container-fluid">
        
        <!-- Icono de Rapido.es -->

        <div> <img src="/images/logo-rapido.png" alt=""> </div>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
        </button>
        
        <!-- Buscador -->
        <form action="{{ route('search') }}" method="GET" class="d-flex">
            <button class="btn btn-outline-success ms-5" type="submit"><i class="fas fa-search"></i></button>
            <input class="form-control" type="text" name="q" placeholder="{{__('ui.buscar')}}..." aria-label="Search">
        </form>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <!-- Página principal -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>

                <!-- Registro y Login si eres invitado -->
                @guest
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('register')}}"></i>{{__('ui.register')}}</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('login')}}"></i>Login</a>
                </li>
                @endguest

                <!-- Menú desplegable con las distintas categorías -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('ui.categorias')}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item text-center"
                                href="{{route('category.ads',['name'=>$category->name,'id'=>$category->id])}}">{{$category->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>

                <!-- Datos de usuario logueado -->
                @if(Auth::user())
                <li class="nav-item mx-3 px-3 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <form action="/logout" method="POST" class="my-logout">
                                @csrf
                                <button>Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endif

                <!-- Cambiar idioma. Disponibles: español, inglés e italiano -->
                <div class="my-flag mx-3 px-3">
                    <a href="#">@include('layouts._locale',["lang"=>'es','nation'=>'es'])</a>
                    <a href="#">@include('layouts._locale',["lang"=>'en','nation'=>'gb'])</a>
                    <a href="#">@include('layouts._locale',["lang"=>'it','nation'=>'it'])</a>
                </div>

                <!-- Subir anuncio a la plataforma -->
                <li class="nav-item my-idioma">
                    <a class="nav-link active" aria-current="page" href="{{ route('ad.new')}}"> <i class="fas fa-plus-square"></i>  {{__('ui.subir')}}</a>
                </li>

                <!-- Solo para el revisor -->
                @auth
                @if(Auth::user()->is_revisor)
                <li class="nav-item mx-2 px-2">
                    <a class="nav-link" href="{{ route('revisor.home') }}">
                        Revisor Casa
                        <span class="badge rounded-pill bg-danger">
                            {{\App\Models\Ad::ToBeRevisionedCount() }}
                        </span>
                    </a>
                </li>
                @endif
                @endauth

            </ul>
        </div>
    </div>
</nav>
