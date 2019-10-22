<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> <?php echo e(config('app.name', 'Laravel' )); ?> ~ <?php echo $titulo; ?></title>

        <!-- Fonts -->
   		    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
	    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
   		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>  
      
    </head>
    <body>
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

                                    
                                <?php if (\Shinobi::can('panelAdmin')): ?>
                                    <li class="nav-item">                            
                                        <a class="nav-link" href="<?php echo e(route('panel.view')); ?>">Panel Administrador</a>
                                    </li>
                                <?php endif; ?>  

                                <div class="wrapper-drop">
                                    <label>
                                        <img src="<?php echo e(asset('icons/person.svg')); ?>" style="width: 30px">
                                    </label>
                                    <ul class="ul-drop">
                                        <li class="li-drop"> 
                                            <a class="nav-link" href="<?php echo e(route('users.show', Auth::user()->slug)); ?>">
                                                Perfil
                                                <img src=" <?php echo e(asset('icons/favorite-red.svg')); ?> " alt="">
                                            </a>
                                        </li>
                                        <li class="li-drop"> 
                                            <a href="<?php echo e(route('logout')); ?>" class="nav-link"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                Salir
                                            </a>
                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"    style="display: none;">
                                                <?php echo csrf_field(); ?>
                                            </form>
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
    	<div class="container">
		    <div class="row">
    			<div class="col-md-10 offset-md-1">                    
    				<div class="card">
    					<div class="card-body">
        				  	<?php echo $calendar->calendar(); ?>

            				<?php echo $calendar->script(); ?>

    					</div>
                    </div>
                   
    			</div>
		    </div>
	   </div>
    </body>
</html>

	<?php /**PATH /var/www/html/intranet2/resources/views/users/events.blade.php ENDPATH**/ ?>