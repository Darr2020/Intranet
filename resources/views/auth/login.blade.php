<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
   {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
  <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
    <div class="svg"></div>
    <div class="container">
        <div class="img">
            <img src=" {{asset('img/portadaLogin.svg')}} ">
        </div>
        <div class="login-continer">
              
                                            
            <form method="POST" action="{{ route('login') }}">
                 @csrf
                <img src=" {{asset('img/login.svg')}} " class="avatar">
                <h2>Bienvenido</h2>
                <div class="input-div one">
                    <div class="i">
                        <img src=" {{asset('icons/personLogin.svg')}} ">
                    </div>
                    <div>
                        <h5>Nombre de Usuario</h5>
                        <input class="input" type="text" name="email" value="{{ old('email') }}" autofocus>
                    </div>                   
                </div>
                @if ($errors->has('email'))
                    <span style="color:red">{{ $errors->first('email') }}</span>
                @endif
                <div class="input-div two">
                    <div class="i">
                        <img src=" {{asset('icons/lock.svg')}} ">
                    </div>
                    <div>
                        <h5>Contraseña</h5>
                        <input class="input" type="password" name="password" id="password">
                    </div>
                </div>
                @if ($errors->has('password'))
                    <span style="color:red">{{ $errors->first('password') }}</span>
                @endif 
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


