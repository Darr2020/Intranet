<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {!!$titulo!!} ~ {{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/inicio.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css"> 


</head>
<body>
    <div id="app">      
        <header class="sticky-top">
            <nav class="navbar navbar-expand-md navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/') }}">MEUNET</a>                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto"></ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
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
                                @can('admin.panel')
                                    <li class="nav-item">                            
                                        <a class="nav-link" href="{{ route('panel.view') }}">Panel Administrador</a>
                                    </li>
                                @endcan  

                                <div class="wrapper-drop">
                                    <label>
                                        <img src="{{ asset('icons/personNav.svg') }}" style="width: 30px">
                                    </label>
                                    <ul class="ul-drop">
                                        <li class="li-drop"> 
                                            <a class="nav-link" href="{{ route('users.show', Auth::user()->slug) }}">
                                                Perfil
                                                <img src=" {{asset('icons/favorite-red.svg')}} " class="float-right">
                                            </a>
                                        </li>
                                        <li class="li-drop"> 
                                            <a href="{{ route('logout') }}" class="nav-link"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                Salir
                                            </a>
                                            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">@csrf</form>
                                        </li>
                                    </ul>
                                </div>                           
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </header> 
        <main class="py-4">
            <div class="container-fluid">
                <div class="row">
                    @if (Request::path() == 'servicios')

                    @else
                    <div class="col-md-3">
                            <div class="sticky-services">
                                <section class="section-services">
                                    <h4>Servicios</h4>
                                    <hr>

                                    <div class="service-box">
                                            <div class="service-icon yellow">
                                                <div class="front-content">
                                                    <h3>SVP</h3>
                                                </div>
                                            </div>
                                            <div class="service-content">
                                                <h3>Vacaciones y Permisos</h3>
                                                <p>Sistema para la solicitud de vacaciones y permisos de trabajo</p>
                                            </div>
                                        </div>
                                    
                                        <div class="service-box">
                                            <div class="service-icon orange">
                                                <div class="front-content">
                                                    <h3>CTRP</h3>
                                                </div>
                                            </div>
                                            <div class="service-content">
                                                <h3>Constancia y Recibos</h3>
                                                <p>Sistema para la solicitud de Constancias de trabajo y Recibo de pago</p>
                                            </div>
                                        </div>
                                        <div class="service-box">
                                            <div class="service-icon red">
                                                <div class="front-content">
                                                    <h3>SIGEFIRRHH</h3>
                                                </div>
                                            </div>
                                            <div class="service-content">
                                                <h3>SIGEFIRRHH</h3>
                                                <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
                                            </div>
                                        </div>
                                    
                                        <div class="service-box">
                                            <div class="service-icon grey">
                                                <div class="front-content">
                                                    <h3>SIADE</h3>
                                                </div>
                                            </div>
                                            <div class="service-content">
                                                <h3>SIADE</h3>
                                                <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
                                            </div>
                                        </div> 
                                    <a href="{{route('services') }}" class="btn btn-service btn-block"
                                        role="button">
                                        Más servicios...
                                    </a>
                                </section>
                            </div>
                        </div>  
                    @endif                        
                    <div class="col-md-9">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>                    
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>      
    @include('sweet::alert')
</body>
</html>
