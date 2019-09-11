<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {!!$titulo!!} ~ {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


</head>
<body>
    <div id="app">

    <header class="sticky-top">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   MEUNET
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Bienvenido</a>
                            </li>
                        @else
                            <!--Usuarios-->
                            <li class="nav-item {{ active('noticias') }}">
                                <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                            </li>

                            <li class="nav-item {{ active('directorio') }}">
                                <a class="nav-link" href="{{ url('directorio') }}">Directorio</a>
                            </li>
                            <li class="nav-item {{ active('eventos') }}">
                                <a class="nav-link" href="{{ url('eventos') }}">Eventos</a>
                            </li>
                                                        
                            @can('roles.index')
                                <li class="nav-item">                            
                                    <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
                                </li>
                            @endcan

                            @can('posts.index')                               
                                <li class="nav-item {{ active('posts') }}">
                                    <a class="nav-link" href="{{ url('posts') }}">Noticias</a>
                                </li>
                            @endcan  
                            @can('tags.index')                               
                                <li class="nav-item {{ active('tags') }} ">
                                    <a class="nav-link" href="{{ url('tags') }}">Etiquetas</a>
                                </li>
                            @endcan     

                            <div class="wrapper-drop">
                                <label>
                                    <img src="{{ asset('icons/person.svg') }}" style="width: 30px">
                                </label>
                                <ul class="ul-drop">
                                    <li class="li-drop"> 
                                        <a class="nav-link" href="{{ route('users.show', Auth::user()->slug) }}">
                                            Perfil
                                            <img src=" {{asset('icons/favorite-red.svg')}} " alt="">
                                        </a>
                                    </li>
                                    <li class="li-drop"> 
                                        <a href="{{ route('logout') }}" class="nav-link"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"    style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>                           
                        @endguest
                    </ul>
                </div>
            </div>
            </nav>

        </div>
    </header>

        @if (session('info'))
            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-2">
                        <div class="alert alert-primary ">
                            {{ session('info') }}
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/highcharts.js') }}"></script>
    <script src="{{ asset('js/graficas.js') }}"></script>
        
    @include('sweet::alert')
    @yield('scripts')

</body>
</html>
