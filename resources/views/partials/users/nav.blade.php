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
                        <li class="nav-item {{active('noticias')}}">
                            <a class="nav-link" href="{{url('/')}}">Inicio</a>
                        </li>

                        <div class="dropdown">
                            <a href="#" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <img src=" {{asset('icons/notifications.svg')}} " class="mt-2">
                             <div class="badge badge-success">{{$dayNoti}}</div>
                            </a>
                           
                            <div class="dropdown-menu" aria-labelledby="dropdownNotification">
                                @foreach ($notifications as $n)
                                
                                    <a class="dropdown-item" href="#">{{$n->type}} {{$n->title}}</a>
                                @endforeach
                            </div>
                          </div>

                        <li class="nav-item {{active('directorio')}}">
                            <a class="nav-link" href="{{url('directorio')}}">Directorio</a>
                        </li>
                        <li class="nav-item {{active('eventos')}}">
                            <a class="nav-link" href="{{url('eventos')}}">Eventos</a>
                        </li>
                        <li class="nav-item {{active('tareas')}}">
                            <a class="nav-link" href="{{url('tareas')}}">Tareas</a>
                        </li>
                        @can('admin.panel')
                            <li class="nav-item">                            
                                <a class="nav-link" href="{{ route('admin.panel') }}">Panel Administrador</a>
                            </li>
                        @endcan  

                        <div class="wrapper-drop">
                            <label>
                                <img src="{{ asset('icons/personNav.svg') }}" style="width: 30px">
                            </label>
                            <ul class="ul-drop">
                                <li class="li-drop"> 
                                    <a class="nav-link" href="{{ route('users.show', Auth::user()->slug) }}">
                                        <span class="text-primary">Perfil</span>
                                        <img src=" {{asset('icons/favorite-red.svg')}} " class="float-right">
                                    </a>
                                </li>
                                <li class="li-drop"> 
                                    <a href="{{ route('logout') }}" class="nav-link"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <span class="text-primary">Salir</span>
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