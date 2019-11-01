<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
   
  <link href="<?php echo e(asset('css/login.css')); ?>" rel="stylesheet">
</head>
<body>
    <div class="svg"></div>
    <div class="container">
        <div class="img">
            <img src=" <?php echo e(asset('img/portadaLogin.svg')); ?> ">
        </div>
        <div class="login-continer">
              
                                            
            <form method="POST" action="<?php echo e(route('login')); ?>">
                 <?php echo csrf_field(); ?>
                <img src=" <?php echo e(asset('img/login.svg')); ?> " class="avatar">
                <h2>Bienvenido</h2>
                <div class="input-div one">
                    <div class="i">
                        <img src=" <?php echo e(asset('icons/personLogin.svg')); ?> ">
                    </div>
                    <div>
                        <h5>Nombre de Usuario</h5>
                        <input class="input" type="text" name="email" value="<?php echo e(old('email')); ?>" autofocus>
                    </div>                   
                </div>
                <?php if($errors->has('email')): ?>
                    <span style="color:red"><?php echo e($errors->first('email')); ?></span>
                <?php endif; ?>
                <div class="input-div two">
                    <div class="i">
                        <img src=" <?php echo e(asset('icons/lock.svg')); ?> ">
                    </div>
                    <div>
                        <h5>Contraseña</h5>
                        <input class="input" type="password" name="password" id="password">
                    </div>
                </div>
                <?php if($errors->has('password')): ?>
                    <span style="color:red"><?php echo e($errors->first('password')); ?></span>
                <?php endif; ?> 
                <a href="#" onclick="mostrarContrasena()">ver contraseña</a>
                <button class="btn">Iniciar sesión</button>
            </form>
        </div>
    </div>

    <script>
        const inputs = document.querySelectorAll('.input');

        function focusFunc(){
            let parent = this.parentNode.parentNode;
            parent.classList.add('focus');
        }

        function blurFunc(){
            let parent = this.parentNode.parentNode;
            if(this.value == ""){
                parent.classList.remove('focus');
            }            
        }

        inputs.forEach(input => {
            input.addEventListener('focus', focusFunc);
            input.addEventListener('blur', blurFunc);
        });

        function mostrarContrasena(){
            var tipo = document.getElementById("password");
            if(tipo.type == "password"){
                tipo.type = "text";
            }else{
                tipo.type = "password";
            }
        }
    </script>      
</body>
</html>


<?php /**PATH /var/www/html/1/intranet2/resources/views/auth/login.blade.php ENDPATH**/ ?>