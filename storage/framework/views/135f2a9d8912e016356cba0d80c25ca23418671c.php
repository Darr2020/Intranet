<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title> <?php echo $titulo; ?> ~ <?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/inicio.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css"> 


</head>
<body>
    <div id="app">      
        <header class="sticky-top">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div class="container">
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
                                <?php if (\Shinobi::can('admin.panel')): ?>
                                    <li class="nav-item">                            
                                        <a class="nav-link" href="<?php echo e(route('panel.view')); ?>">Panel Administrador</a>
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
            </div>
        </header> 
        <main class="py-4">
            <div class="container-fluid">
                <div class="row">
                    <?php if(Request::path() == 'servicios'): ?>
                        
                    <?php else: ?>
                        <?php echo $__env->make('partials.services.cardsService', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>                       
                    <div class="col-md-9">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
        </main>                

        <?php if(session('info')): ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-2">
                        <div class="alert alert-primary ">
                            <?php echo e(session('info')); ?>

                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>       
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>      
    <?php echo $__env->make('sweet::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /var/www/html/sistemas/intranet2/resources/views/layouts/app.blade.php ENDPATH**/ ?>