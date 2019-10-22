<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Menunet Admin</title>

  <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="<?php echo e(asset('css/admin.css')); ?>" rel="stylesheet">

  <script src=" <?php echo e(asset('js/sweetalert.min.js')); ?> "></script> 
  <script src=" <?php echo e(asset('js/jquery.min.js')); ?> "></script>
  <script src=" <?php echo e(asset('js/raphael.min.js')); ?> "></script>
  <script src=" <?php echo e(asset('js/morris.min.js')); ?> "></script>
</head>

<body id="page-top">
  <div id="wrapper">
      <!-- Sidebar -->
      <div class="sticky-top">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sticky-top" id="accordionSidebar">
          <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('panel.view')); ?>">
              <div class="sidebar-brand-text mx-3">MEUNET Admin</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
              <a class="nav-link" href=" <?php echo e(route('panel.view')); ?> ">
                <img src=" <?php echo e(asset('icons/dashboard.svg')); ?> ">
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
              <a class="nav-link" href="#">
                <img src="<?php echo e(asset('icons/services.svg')); ?>">
                <span>Servicios</span>
              </a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" 
                data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <img src="<?php echo e(asset('icons/roles.svg')); ?>">
                <span>Roles</span>
              </a>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <?php if (\Shinobi::can('roles.index')): ?>
                      <a class="collapse-item" href="<?php echo e(route('roles.index')); ?>">Gestionar Roles <span class="badge badge-info float-right"> <?php echo e($TRol); ?> </span></a>
                  <?php endif; ?>
                  <?php if (\Shinobi::can('roles.asignar')): ?>
                      <a class="collapse-item" href="<?php echo e(route('listar.users')); ?>">Asignar Rol</a>
                  <?php endif; ?>
                  <?php if (\Shinobi::can('roles.create')): ?>
                      <a class="collapse-item" href="<?php echo e(route('roles.create')); ?>">Crear Rol 
                          <img class="float-right" style="width: 20px;" src="<?php echo e(asset('icons/create.svg')); ?>">
                      </a>
                  <?php endif; ?>
                </div>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" 
                    data-target="#collapsePosts" aria-expanded="true" aria-controls="collapsePosts">
                    <img src="<?php echo e(asset('icons/post.svg')); ?>">
                    <span>Noticias</span>
                </a>
                <div id="collapsePosts" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <?php if (\Shinobi::can('posts.index')): ?>
                            <a class="collapse-item" href="<?php echo e(route('posts.index')); ?>">
                                Gestionar Noticias 
                                <span class="badge badge-info float-right"> <?php echo e($TPost); ?> </span>
                            </a>
                        <?php endif; ?>
                        <?php if (\Shinobi::can('posts.create')): ?>
                            <a class="collapse-item" href="<?php echo e(route('posts.create')); ?>">Crear Noticia 
                                <img class="float-right" style="width: 20px;" src="<?php echo e(asset('icons/create.svg')); ?>">
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" 
                    data-target="#collapseEvents" aria-expanded="true" aria-controls="collapseEvents">
                    <img src="<?php echo e(asset('icons/event.svg')); ?>">
                    <span>Eventos</span>
                </a>
                <div id="collapseEvents" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <?php if (\Shinobi::can('events.index')): ?>
                            <a class="collapse-item" href="<?php echo e(route('events.index')); ?>">
                                Gestionar Eventos 
                                <span class="badge badge-info float-right"> <?php echo e($TEvent); ?> </span>
                            </a>
                        <?php endif; ?>
                        <?php if (\Shinobi::can('posts.create')): ?>
                            <a class="collapse-item" href="<?php echo e(route('events.create')); ?>">Crear Evento 
                                <img class="float-right" style="width: 20px;" src="<?php echo e(asset('icons/create.svg')); ?>">
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" 
                    data-target="#collapseTgas" aria-expanded="true" aria-controls="collapseTgas">
                    <img src="<?php echo e(asset('icons/tag.svg')); ?>">
                    <span>Etiquetas</span>
                </a>
                <div id="collapseTgas" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <?php if (\Shinobi::can('tags.index')): ?>
                            <a class="collapse-item" href="<?php echo e(route('tags.index')); ?>">
                                Gestionar Etiquetas 
                                <span class="badge badge-info float-right"> <?php echo e($TTag); ?> </span>
                            </a>
                        <?php endif; ?>
                        <?php if (\Shinobi::can('posts.create')): ?>
                            <a class="collapse-item" href="<?php echo e(route('tags.create')); ?>">Crear Etiqueta 
                                <img class="float-right" style="width: 20px;" src="<?php echo e(asset('icons/create.svg')); ?>">
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </li>
             
            <!-- Charts statistics-->
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCharts" aria-expanded="true" aria-controls="collapseCharts">
                  <img src=" <?php echo e(asset('icons/chart.svg')); ?> ">
                  <span>Gráficas estadisticas</span></a>
              </a>
              <div id="collapseCharts" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href=" <?php echo e(route('charts.views')); ?> ">Todas las gráficas</a>
                  <a class="collapse-item" href=" <?php echo e(route('charts.area')); ?> ">
                    Noticias
                    <img src=" <?php echo e(asset('icons/lineChart.svg')); ?> " class="float-right">
                  </a>
                  <a class="collapse-item" href=" <?php echo e(route('charts.bar')); ?> ">
                    Eventos
                    <img src=" <?php echo e(asset('icons/barChart.svg')); ?> " class="float-right">
                  </a>
                  <a class="collapse-item" href=" <?php echo e(route('charts.pie')); ?> ">
                    De Torta
                    <img src=" <?php echo e(asset('icons/pieChart.svg')); ?> " class="float-right">
                  </a>
                  
                </div>
              </div>
            </li>
  
            <hr class="sidebar-divider">
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSesion" aria-expanded="true" aria-controls="collapseSesion">         
                <img src="<?php echo e(asset('icons/person.svg')); ?>">
                <span>Mi sesión</span>
              </a> 
              <div id="collapseSesion" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item text-primary" href=" <?php echo e(route('users.show', Auth::user()->slug)); ?>">
                    <span><?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->last_name); ?> </span>
                    <img src=" <?php echo e(asset('icons/favorite-red.svg')); ?> " class="float-right">
                  </a>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <img src=" <?php echo e(asset('icons/logout.svg')); ?> " class="float-right">
                      Logout
                  </a>                
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a href=" <?php echo e(url('/')); ?> " class="nav-link ">
                <img src=" <?php echo e(asset('icons/back.svg')); ?> ">
                Regresar al inicio
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
            <img src="<?php echo e(asset('icons/bar.svg')); ?>">
          </button>     

          <div id="carouselPanel" class="carousel slide "  data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselPanel" data-slide-to="0" class="active"></li>
              <li data-target="#carouselPanel" data-slide-to="1"></li>
              <li data-target="#carouselPanel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src=" <?php echo e(asset('img/bgPanel.jpg')); ?> " class=" w-100 img-fluid">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                  <img src=" <?php echo e(asset('img/bgPanel.jpg')); ?> " class="d-block w-100 img-fluid">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src=" <?php echo e(asset('img/bgPanel.jpg')); ?> " class="d-block w-100 img-fluid">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
              <div class="container-fluid">  
            

            <hr>
            <div class="row justify-content-center">
               <!-- DATA FOR MONTH -->
               <!-- Posts Months -->
               <div class="col-xl-4 col-md-4">
                <div class="card shadow">                
                  <a href="#collapseMonths" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Noticias en <?php echo e($m); ?></h6>
                  </a>
                  <div class="collapse show" id="collapseMonths">
                    <div class="card-body">
                    Haz publicado <strong><?php echo e($postM); ?>  noticias</strong> en el mes
                    </div>
                  </div>
                </div>
              </div>                
              <!-- Events Months -->
              <div class="col-xl-4 col-md-4">
                <div class="card shadow">                
                  <a href="#collapseMonths" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Eventos en <?php echo e($m); ?></h6>
                  </a>
                  <div class="collapse show" id="collapseMonths">
                    <div class="card-body">
                    Haz publicado <strong><?php echo e($eventM); ?>  eventos</strong> en el mes  <img src=" <?php echo e(asset('icons/calendar.svg')); ?> ">
                    </div>
                  </div>
                </div>
              </div>  
              <!-- Tasks Months -->
              <div class="col-xl-4 col-md-4">
                <div class="card shadow">                
                  <a href="#collapseMonths" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-black">Tareas en <?php echo e($m); ?></h6>
                  </a>
                  <div class="collapse show" id="collapseMonths">
                    <div class="card-body">
                    Los usuarios han creado <strong> <small>add tasks</small>  tareas</strong> en el mes  <img src=" <?php echo e(asset('icons/calendar.svg')); ?> ">
                    </div>
                  </div>
                </div>
              </div>             
            </div>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <?php if(count($errors) > 0): ?>
                  <div class="alert alert-danger" role="alert">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <ul>
                          <li> <?php echo e($e); ?> </li>
                        </ul>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
      
            <main class="py-3">
              <?php echo $__env->yieldContent('contentAdmin'); ?>
            </main>     
             
      </div>
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


  <script src="<?php echo e(asset('vendor/js/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/js/jquery.easing.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/admin.min.js')); ?>"></script>

  <?php echo $__env->make('sweet::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html><?php /**PATH /var/www/html/intranet2/resources/views/admin/panel.blade.php ENDPATH**/ ?>