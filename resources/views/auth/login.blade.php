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
            <img src=" {{asset('undraw_login2.svg')}} ">
        </div>
        <div class="login-continer">
            <form method="POST" action="{{ route('login') }}">
                <img src=" {{asset('undraw_profile.svg')}} " class="avatar">
                <h2>Bienvenido</h2>
                <div class="input-div one">
                    <div class="i">
                        <img src=" {{asset('icons/person.svg')}} ">
                    </div>
                    <div>
                        <h5>Nombre de Usuario</h5>
                        <input class="input" type="text" name="email" value="{{ old('email') }}" autofocus>
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <img src=" {{asset('icons/lock.svg')}} ">
                    </div>
                    <div>
                        <h5>Contraseña</h5>
                        <input class="input" type="password" name="password" id="password">
                    </div>
                </div>
                <a href="#" onclick="mostrarContrasena()">ver contraseña</a>
                <input type="submit" value="Iniciar sesión" class="btn">
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

        })
    </script>
    {{--<div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6  d-print-block ">
                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" src=" {{ asset('img/login.svg') }} " alt="" srcset="">
                            </div>     
                            <div class="col-lg-6 p-5">
                                <div class="text-center">
                                    <h4 class="h4 text-gray-900 mb-5">
                                        Bienvenido
                                    </h4>
                                </div>
                                <form method="POST" action="{{ route('login') }}" class="ml-4">
                                    @csrf
                                    <div class="group">      
                                        <input type="email" name="email" value="{{ old('email') }}" autofocus>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Nombre de Usuario <img src="{{ asset('icons/person.svg') }}" class="float-right" style="width: 23px; margin-left: 120px"></label>
                                    </div>                                          
                                    <div class="group">      
                                        <input type="password" name="password" id="password">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Contraseña <img src="{{ asset('icons/lock.svg') }}" class="float-right" style="width: 23px; margin-left: 180px"></label>
                                        <a class="btn btn-outline-danger mt-2 pass" onclick="mostrarContrasena()">ver contraseña</a>
                                    </div>
                                    
                                    @if ($errors->has('email'))
                                        <span class="badge badge-pill badge-danger" style=" justify-content: center; margin-left: -50px;">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif 
                                    @if ($errors->has('password'))
                                        <span class="badge badge-pill badge-danger">
                                            {{ $errors->first('password') }}
                                        </span>
                                    @endif                                   
                                    <button class="button2">Iniciar sesión</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-5 login-left">
                        <h1 class="text-center login-title">
                           <span>M</span><span>E</span><span>U</span><span>N</span><span>E</span> <span>T</span>
                       </h1>
                       <br><br>
                        <p>Entorno para la gestión de boletines informativos, eventos institusionales, comunicación interna, reportesde constancia de trabajo recibo de pagos</p>
                        <img src="{{ asset('icons/arrow_up.svg') }}">
                    </div>

                    <div class="col-md-5  login-right">
                        <div class="login-form">
                                                 
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div id="container">
                                    <span class="input-email">
                                        <input 
                                               class="input__field" autofocus="" id="input-4"/>
                                        
                                        <label for="input-4" class="input__label">
                                            <span class="input__label-content">Correo<img src="{{ asset('icons/email.svg') }}" class="float-right" style="width: 20px"></span>
                                        </label>
                                    </span>

                                    <span class="input-password">

                                        <input class="input__field" type="password" name="password" id="input-5"/>
                                        
                                        <label for="input-5" class="input__label">
                                            <span class="input__label-content">Contraseña<img src="{{ asset('icons/lock.svg') }}" class="float-right" style="width: 20px"></span>
                                        </label>
                                    </span>

                                    <button type="submit" id="send-button">
                                        Iniciar
                                    </button>                                    
                                </div>                               
                            </form>
                            
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div> --}}
    <script src="{{ asset('js/app.js') }}"></script>  
    <script>
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


