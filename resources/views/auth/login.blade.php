<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

</head>
<body>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-5 login-left">
                        <h1 class="text-center login-title">
                           <span>M</span><span>E</span><span>U</span><span>N</span><span>E</span> <span>T</span>
                       </h1>
                       <br><br>
                        <p>Entorno para la gestión de boletines informativos, eventos institusionales, comunicación interna, reportesde constancia de trabajo recibo de pagos</p>
                        <img src="{{ asset('icons/arrow_up.svg') }}">
                    </div>

                    <div class="col-md-5 login-right">
                        <div class="login-form">
                                                 
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div id="container">
                                    <span class="input-email">
                                        <input type="email"
                                                name="email" 
                                               value="{{ old('email') }}"
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
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>   

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>   
    
</body>
</html>


