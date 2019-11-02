<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?> - <?php echo $titulo; ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/inicio.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">    
</head>
<body>
    <div id="app">      
        <header class="sticky-top">
            <nav class="navbar navbar-expand-md navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">MEUNET</a>                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto"></ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <?php if(auth()->guard()->guest()): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>">Bienvenido</a>
                                </li>
                            <?php else: ?>
                                <!--Usuarios-->
                                <li class="nav-item <?php echo e(active('noticias')); ?>">
                                    <a class="nav-link" href="<?php echo e(url('/')); ?>">Inicio</a>
                                </li>

                                <li class="nav-item <?php echo e(active('directorio')); ?>">
                                    <a class="nav-link" href="<?php echo e(url('directorio')); ?>">Directorio</a>
                                </li>
                                <li class="nav-item <?php echo e(active('eventos')); ?>">
                                    <a class="nav-link" href="<?php echo e(url('eventos')); ?>">Eventos</a>
                                </li>
                                <li class="nav-item <?php echo e(active('tareas')); ?>">
                                    <a class="nav-link" href="<?php echo e(url('tareas')); ?>">Tareas</a>
                                </li>
                                <?php if (\Shinobi::can('admin.panel')): ?>
                                    <li class="nav-item">                            
                                        <a class="nav-link" href="<?php echo e(route('admin.panel')); ?>">Panel Administrador</a>
                                    </li>
                                <?php endif; ?>  

                                <div class="wrapper-drop">
                                    <label>
                                        <img src="<?php echo e(asset('icons/personNav.svg')); ?>" style="width: 30px">
                                    </label>
                                    <ul class="ul-drop">
                                        <li class="li-drop"> 
                                            <a class="nav-link" href="<?php echo e(route('users.show', Auth::user()->slug)); ?>">
                                                Perfil
                                                <img src=" <?php echo e(asset('icons/favorite-red.svg')); ?> " class="float-right">
                                            </a>
                                        </li>
                                        <li class="li-drop"> 
                                            <a href="<?php echo e(route('logout')); ?>" class="nav-link"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                Salir
                                            </a>
                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;"><?php echo csrf_field(); ?></form>
                                        </li>
                                    </ul>
                                </div>                           
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header> 
        <main class="py-4">
            <div class="container-fluid">
                <div class="row">
                    <?php if(Request::path() == 'servicios'): ?>

                    <?php else: ?>
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
                                    <a href="<?php echo e(route('services')); ?>" class="btn btn-service btn-block"
                                        role="button">
                                        Más servicios...
                                    </a>
                                </section>
                            </div>
                        </div>  
                    <?php endif; ?>                        
                    <div class="col-md-9">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
        </main>  
        <div class="scrollUp" id="scrollUp">
            <input type="button" value="Subir" class="scrollUp-text">
            <span class="scrollIcon">
                <img src=" <?php echo e(asset('icons/arrow_up.svg')); ?>">
            </span>
        </div>                  
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>      
    <?php echo $__env->make('sweet::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /var/www/html/sistemas/intranet2/resources/views/layouts/app.blade.php ENDPATH**/ ?>