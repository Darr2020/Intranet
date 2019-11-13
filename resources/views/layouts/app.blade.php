<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - {!!$titulo!!}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/inicio.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">    
</head>
<body>
    <div id="app">      
        @include('partials.users.nav')
        <main class="py-4">
            <div class="container-fluid">
                <div class="row">
                    @if (Request::path() == 'servicios')

                    @else
                        @include('partials.users.cardsService')
                    @endif                        
                    <div class="col-md-9">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>  
        <div class="scrollUp" id="scrollUp">
            <input type="button" value="Subir" class="scrollUp-text">
            <span class="scrollIcon">
                <img src=" {{asset('icons/arrow_up.svg')}}">
            </span>
        </div>                  
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>      
    @include('sweet::alert')
</body>
</html>
