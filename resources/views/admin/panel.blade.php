<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Menunet Admin</title>

  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

  <script src=" {{asset('js/sweetalert.min.js')}} "></script> 
  <script src=" {{asset('js/jquery.min.js')}} "></script>
  <script src=" {{asset('js/raphael.min.js')}} "></script>
  <script src=" {{asset('js/morris.min.js')}} "></script>
</head>

<body id="page-top">
  <div id="wrapper">
      <!-- Sidebar -->
      <div class="sticky-top">
        <ul class="navbar-nav sidebar sidebar-dark accordion sticky-top" style="background: #4267B2" id="accordionSidebar">
          <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.panel')}}">
              <div class="sidebar-brand-text mx-3">MEUNET Admin</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSesion" aria-expanded="true" aria-controls="collapseSesion">         
                <img src="{{ asset('icons/personNav.svg') }}">
                <span>Mi sesión</span>
              </a> 
              <div id="collapseSesion" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item text-primary" href=" {{ route('users.show', Auth::user()->slug) }}">
                    <span>{{ Auth::user()->name }} {{ Auth::user()->last_name }} </span>
                    <img src=" {{asset('icons/favorite-red.svg')}} " class="float-right">
                  </a>

                  <a href="{{ route('logout') }}" class="dropdown-item text-danger" 
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Cerrar sesión
                  </a>
                  <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">@csrf</form>              
                </div>
              </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            @can('services.index')
              <li class="nav-item">
                <a class="nav-link" href=" {{route('services.index')}} ">
                  <img src="{{ asset('icons/services.svg') }}">
                  <span>Servicios</span>
                  <span class="float-right">{{$Tservice}}</span>
                </a>
              </li>     
            @endcan                                      
            @can('roles.index')
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" 
                data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <img src="{{ asset('icons/roles.svg') }}">
                <span>Roles</span>
              </a>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="{{ route('roles.index') }}">Gestionar Roles <span class="badge badge-info float-right"> {{$TRol}} </span></a>
                  <a class="collapse-item" href="{{ route('listar.users') }}">Asignar Rol</a>   
                  <a class="collapse-item" href="{{ route('roles.create') }}">Crear Rol 
                    <img class="float-right" style="width: 20px;" src="{{ asset('icons/create.svg') }}">
                  </a>                  
                </div>
              </div>
            </li>
            @endcan
            @can('posts.index')
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" 
                    data-target="#collapsePosts" aria-expanded="true" aria-controls="collapsePosts">
                    <img src="{{ asset('icons/post.svg') }}">
                    <span>Noticias</span>
                </a>
                <div id="collapsePosts" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">   
                      <a class="collapse-item" href="{{ route('posts.index') }}">
                        Gestionar Noticias 
                        <span class="badge badge-info float-right"> {{$TPost}} </span>
                      </a>
                        <a class="collapse-item" href="{{ route('posts.create') }}">Crear Noticia 
                          <img class="float-right" style="width: 20px;" src="{{ asset('icons/create.svg') }}">
                        </a>
                    </div>
                </div>
            </li>
            @endcan
            @can('events.index')
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" 
                    data-target="#collapseEvents" aria-expanded="true" aria-controls="collapseEvents">
                    <img src="{{ asset('icons/event.svg') }}">
                    <span>Eventos</span>
                </a>
                <div id="collapseEvents" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                      <a class="collapse-item" href="{{ route('events.index') }}">
                          Gestionar Eventos 
                          <span class="badge badge-info float-right"> {{$TEvent}} </span>
                      </a>  
                      <a class="collapse-item" href="{{ route('events.create') }}">Crear Evento 
                          <img class="float-right" style="width: 20px;" src="{{ asset('icons/create.svg') }}">
                      </a>
                    </div>
                </div>
            </li> 
            @endcan
            @can('tags.index')
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" 
                  data-target="#collapseTgas" aria-expanded="true" aria-controls="collapseTgas">
                  <img src="{{ asset('icons/tag.svg') }}">
                  <span>Etiquetas</span>
                </a>
                <div id="collapseTgas" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                      <a class="collapse-item" href="{{ route('tags.index') }}">
                          Gestionar Etiquetas 
                          <span class="badge badge-info float-right"> {{$TTag}} </span>
                      </a>
                      <a class="collapse-item" href="{{ route('tags.create') }}">Crear Etiqueta 
                          <img class="float-right" style="width: 20px;" src="{{ asset('icons/create.svg') }}">
                      </a>
                    </div>
                </div>
            </li>
            @endcan
            
            <div class="sidebar-heading">
              Auditoria
            </div>

            @can('trace.index')
              <li class="nav-item">
                <a class="nav-link" href=" {{route('trace.index')}} ">
                  <img src=" {{asset('icons/audit.svg')}}">
                  <span>Acciones</span>
                </a>
              </li>     
            @endcan 

            <!-- CHARTS STADISTICS-->
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCharts" aria-expanded="true" aria-controls="collapseCharts">
                  <img src=" {{asset('icons/chart.svg')}} ">
                  <span>Gráficas estadisticas</span></a>
              </a>
              <div id="collapseCharts" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href=" {{route('charts.area')}} ">
                    Noticias <img src=" {{asset('icons/lineChart.svg')}} " class="float-right">
                  </a>
                  <a class="collapse-item" href=" {{route('charts.bar')}} ">
                    Eventos <img src=" {{asset('icons/barChart.svg')}} " class="float-right">
                  </a>
                  <a class="collapse-item" href=" {{route('charts.pie')}} ">
                    Publicado|Borrador <img src=" {{asset('icons/pieChart.svg')}} " class="float-right">
                  </a>
                  
                </div>
              </div>
            </li>


            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReport" aria-expanded="true" aria-controls="collapseReport">
                  <img src=" {{asset('icons/pdf.svg')}} ">
                  <span>Reporte PDF</span></a>
              </a>
              <div id="collapseReport" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href=" {{route('report.view')}}"  target="_blank">
                    Ver reporte <img src=" {{asset('icons/ver.svg')}} " class="float-right">
                  </a>
                  <a class="collapse-item" href=" {{route('report.down')}}"  target="_blank">
                    Descargar reporte <img src=" {{asset('icons/down.svg')}} " class="float-right">
                  </a>
                </div>
              </div>
            </li>  
            <hr class="sidebar-divider">            
            <li class="nav-item">
              <a href=" {{url('/')}} " class="nav-link">
                <img src="{{asset('icons/back.svg')}}"> Regresar al inicio
              </a>
            </li>
            <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">
  
          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>
        </ul>
      </div>

      <div id="content-wrapper" class="d-flex flex-column">  
        <!-- Main Content -->
        <div id="content"> 
      
        <!-- Sidebar ToggleButton(Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle">
          <img src="{{asset('icons/bar.svg')}}">
        </button> 

          @if (Request::path() == 'PanelAdmin')
            @include('partials.admin.carusel')
          @else 
            <div class="container-fluid">  
            <div class="row justify-content-center">
              <div class="col-md-7">
                @if (count($errors) > 0)
                  <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $e)
                        <ul>
                          <li> {{$e}} </li>
                        </ul>
                    @endforeach
                  </div>
                @endif
              </div>
            </div>
      
            <main class="py-4">
              @yield('contentAdmin')
            </main>     
             
      </div>

          @endif
         
           
    </div>
  

  
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>


  <script src="{{ asset('vendor/js/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/js/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('js/admin.min.js') }}"></script>

  @include('sweet::alert')
  @yield('scripts')
</body>
</html>