<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Menunet Admin</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">


</head>

<body id="page-top">

  <!-- Page Wrapper --> 
 
  <div id="wrapper">

      <!-- Sidebar -->
      <div class="sticky-top">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sticky-top" id="accordionSidebar">
          <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">MEUNET Admin</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href=" {{route('panel.view')}} ">
                    <img src=" {{ asset('icons/dashboard.svg') }} ">
                    <span>Panel</span>
                </a>
            </li>
  
            <!-- Divider -->
            <hr class="sidebar-divider">
  
            <!-- HeaderSideNav -->
            <div class="sidebar-heading">
            Gestión
            </div>
  
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" 
                data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <img src="{{ asset('icons/roles.svg') }}">
                <span>Roles</span>
              </a>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  @can('roles.index')
                      <a class="collapse-item" href="{{ route('roles.index') }}">Gestionar Roles <span class="badge badge-info float-right"> {{$countRol}} </span></a>
                  @endcan
                  @can('roles.create')
                      <a class="collapse-item" href="{{ route('roles.create') }}">Crear Rol 
                          <img class="float-right" style="width: 20px;" src="{{ asset('icons/create.svg') }}">
                      </a>
                  @endcan
                </div>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" 
                    data-target="#collapsePosts" aria-expanded="true" aria-controls="collapsePosts">
                    <img src="{{ asset('icons/post.svg') }}">
                    <span>Noticias</span>
                </a>
                <div id="collapsePosts" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        @can('posts.index')
                            <a class="collapse-item" href="{{ route('posts.index') }}">
                                Gestionar Noticias 
                                <span class="badge badge-info float-right"> {{$countPost}} </span>
                            </a>
                        @endcan
                        @can('posts.create')
                            <a class="collapse-item" href="{{ route('posts.create') }}">Crear Noticia 
                                <img class="float-right" style="width: 20px;" src="{{ asset('icons/create.svg') }}">
                            </a>
                        @endcan
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" 
                    data-target="#collapseEvents" aria-expanded="true" aria-controls="collapseEvents">
                    <img src="{{ asset('icons/event.svg') }}">
                    <span>Eventos</span>
                </a>
                <div id="collapseEvents" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        @can('events.index')
                            <a class="collapse-item" href="{{ route('events.index') }}">
                                Gestionar Eventos 
                                <span class="badge badge-info float-right"> {{$countEvent}} </span>
                            </a>
                        @endcan
                        @can('posts.create')
                            <a class="collapse-item" href="{{ route('events.create') }}">Crear Evento 
                                <img class="float-right" style="width: 20px;" src="{{ asset('icons/create.svg') }}">
                            </a>
                        @endcan
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" 
                    data-target="#collapseTgas" aria-expanded="true" aria-controls="collapseTgas">
                    <img src="{{ asset('icons/tag.svg') }}">
                    <span>Etiquetas</span>
                </a>
                <div id="collapseTgas" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        @can('tags.index')
                            <a class="collapse-item" href="{{ route('tags.index') }}">
                                Gestionar Etiquetas 
                                <span class="badge badge-info float-right"> {{$countTag}} </span>
                            </a>
                        @endcan
                        @can('posts.create')
                            <a class="collapse-item" href="{{ route('tags.create') }}">Crear Etiqueta 
                                <img class="float-right" style="width: 20px;" src="{{ asset('icons/create.svg') }}">
                            </a>
                        @endcan
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
  
            <!-- More -->
            <div class="sidebar-heading">Más ...</div>
  
            <!-- Charts statistics-->
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCharts" aria-expanded="true" aria-controls="collapseCharts">
                  <img src=" {{asset('icons/chart.svg')}} ">
                  <span>Gráficas estadisticas</span></a>
              </a>
              <div id="collapseCharts" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href=" {{route('charts.views')}} ">Todas las gráficas</a>
                  <a class="collapse-item" href=" {{route('charts.line')}} ">
                    De Linea
                    <img src=" {{asset('icons/lineChart.svg')}} " class="float-right">
                  </a>
                  <a class="collapse-item" href=" {{route('charts.bar')}} ">
                    De Barra
                    <img src=" {{asset('icons/barChart.svg')}} " class="float-right">
                  </a>
                  <a class="collapse-item" href=" {{route('charts.pie')}} ">
                    De Torta
                    <img src=" {{asset('icons/pieChart.svg')}} " class="float-right">
                  </a>
                  
                </div>
              </div>
            </li>
  
            <!-- Reports statistics-->
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReports" aria-expanded="true" aria-controls="collapseReports"> 
                  <img src=" {{asset('icons/reports.svg')}} ">
                <span>Reportes estadísticos</span>
              </a> 
              <div id="collapseReports" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href=" {{route('charts.views')}} ">Todas las gráficas</a>
                  <a class="collapse-item" href=" {{route('charts.line')}} ">De Linea</a>
                  <a class="collapse-item" href=" {{route('charts.bar')}} ">De Barra</a>
                  <a class="collapse-item" href=" {{route('charts.pie')}} ">De Torta</a>
                  
                </div>
              </div>
            </li>
          
            <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">
  
          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>
        </ul>
      </div>
      <!-- End of Sidebar -->
  
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
  
        <!-- Main Content -->
        <div id="content">
  
          <!-- Navbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  
            <!-- Sidebar ToggleButton(Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle">
              <img src=" {{asset('icons/bar.svg')}} ">
            </button>  
            
            <a href=" {{url('/')}} " class="nav-link ">
              <img src=" {{asset('icons/back.svg')}} ">
              Regresar al inicio</a>
  
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
           
              <div class="topbar-divider d-none d-sm-block"></div>
  
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }} {{ Auth::user()->last_name }}</span>
                  <span style=" width: 30px;height: 30px;                
                    -moz-border-radius: 50%; -webkit-border-radius: 50%;
                    border-radius: 50%; background: #e74a3b;">
                    <h4 class="text-white text-center">{{$letterName}}</h4> 
                  </span>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href=" {{route('users.show', $profile)}} ">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    perfil
                  </a>             
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>
  
            </ul>
  
          </nav>
          <!-- End of Topbar -->
  
          <!-- Begin Page Content -->
          <div class="container-fluid">
                     
            <h3 class="h3">Datos por Año</h3>
            <hr>
            <div class="row"> 
              <!-- DATA FOR YEAR -->     
              <!-- Posts Year -->
              <div class="col-xl-3 col-md-4 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Noticias publicadas en {{$year}}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$postYear}}</div>
                      </div>                   
                      <img src="{{ asset('icons/news.svg') }}" style="width: 40px">                     
                    </div>
                  </div>
                </div>
              </div>
              <!-- Events Year -->
              <div class="col-xl-3 col-md-4 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Eventos publicados en {{$year}} </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$eventYear}}</div>
                      </div>                   
                        <img src=" {{asset('icons/calendarA.svg')}} " style="width: 40px">                    
                    </div>
                  </div>
                </div>
              </div>
              <!-- Tasks Year -->
              <div class="col-xl-3 col-md-4 mb-4">
                <a href=" {{route('charts.bar')}} ">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Tareas creadas en {{$year}} </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$eventYear}}</div>
                      </div>                   
                        <img src=" {{asset('icons/calendarA.svg')}} " style="width: 40px">                    
                    </div>
                  </div>
                </div>
                </a>
              </div>
            </div>
  
            <h3 class="h3">Datos por Mes</h3>
            <hr>
            <div class="row">
               <!-- DATA FOR MONTH -->
               <!-- Posts Months -->
               <div class="col-xl-3 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Noticias publicadas en el mes de {{$month}} </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"> {{$postMonth}} </div>
                      </div> 
                      <img src="{{ asset('icons/news.svg') }}" style="width: 40px">                  
                    </div>
                  </div>
                </div>
              </div>
  
              <!-- Events Months -->
              <div class="col-xl-3 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                          Eventos publicados en {{$month}}
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$eventMonth}}</div>
                      </div> 
                      <img src=" {{asset('icons/calendar.svg')}} " style="width: 40px">                  
                    </div>
                  </div>
                </div>
              </div>
  
              <!-- Tasks Months -->
              <div class="col-xl-3 col-md-4 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                          Tareas publicados en {{$month}}
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$eventMonth}}</div>
                      </div> 
                      <img src=" {{asset('icons/calendar.svg')}} " style="width: 40px">                  
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
                
            <!-- Content Row -->
            <div class="row">
              <div class="col-lg-6 mb-4">  
                  <main class="py-4">
                      @yield('contentAdmin')
                  </main>     
              </div>
            </div>
        <!-- End of Main Content -->
  
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2019</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
  
      </div>
      <!-- End of Content Wrapper -->
  
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


  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

 
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>


</body>

</html>