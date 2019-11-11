@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="sticky-services">
                <section class="section-services">
                    <h4>Servicios</h4>
                    <hr>
                    <div class="services">
                        <a href="#" class="image">
                            <img src="{{ asset('img/3.png') }}" title="Constacia de trabajo" class="img-fluid">
                        </a>
                        <a href="#" class="image">
                            <img src="{{ asset('img/4.png') }}" title="Recibo de pago" class="img-fluid">
                        </a>
                        <a href="#" class="image">
                            <img src="{{ asset('img/5.png') }}" class="img-fluid">
                        </a>
                        <a href="#" class="image">
                            <img src="{{ asset('img/6.png') }}" class="img-fluid">
                        </a>
                        <a href="#" class="image">
                            <img src="{{ asset('img/7.png') }}" class="img-fluid">
                        </a>
                        <a href="#" class="image">
                            <img src="{{ asset('img/9.jpg') }}" class="img-fluid">
                        </a>
                    </div>
                    <a href="{{route('services') }}" class="btn btn-color btn-block"
                        role="button" aria-pressed="true">
                        Más servicios...
                    </a>
                </section>
                </div>
            </div>
            <div class="col-md-5">
                <form action=" {{route('noticias')}} " 
                    method="GET" id="content">                    
                    <input type="text" name="title" class="input" id="search-input">
                    <button type="reset" class="search" id="search-btn"></button>
                </form>
                <section>
                    @foreach($posts as $post)
                        <div class="card post">
                                @if($post->image)
                                    <img src="{{ $post->image }}" class="card-img-top img-responsive">
                                @endif
                            <div class="card-body">
                                <div class="title">
                                    <a href="{{ route('noticia', $post->slug) }}">
                                        {{ $post->title }}
                                    </a>
=======
        <div class="row">
            <div class="col-md-6 offset-1">
                <form action=" {{route('noticias')}} " 
                    method="GET" id="content">                    
                    <input type="text" name="title"  class="input" id="search-input">
                    <button type="reset" class="search" id="search-btn"></button>
                </form> 
               
                <section>                    
                    @foreach($posts as $post)                   
                        <div class="card post">
                            @if($post->image)
                                <img src="{{ $post->image }}" class="card-img-top img-responsive">
                            @endif
                            <div class="card-body">
                                <div class="title">
                                    <a href="{{ route('noticia', $post->slug) }}">{{ $post->title }}</a>
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
                                </div>
                                <div class="resumen">
                                    <p>{{ $post->summary }}</p>
                                </div>
                                <div class="continue">
                                    <a href="{{ route('noticia', $post->slug) }}">leer más &rarr;</a>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="float-right"> 
<<<<<<< HEAD
                                    publicado {{ $post->created_at->diffForHumans() }} 
=======
                                    publicado {{ \Carbon\Carbon::parse($post->date_published  )->format('d/m/Y')}}  
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
                                </small>
                            </div>
                        </div>
                        <br>
                    @endforeach
<<<<<<< HEAD
                    <div class="float-right">
=======
                    <div style="margin-left: 150px">
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
                        {!! $posts->render() !!}
                    </div>
                </section>
            </div>
<<<<<<< HEAD
            <div class="col-md-4 ">
=======
            <div class="col-md-5">
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
                <div class="card sticky-tasks ml-auto" style="width: 22rem">
                    <div class="card-header top">
                        <div id="welcome" class="text-center">Hola {{ Auth::user()->name }}</div>
                        <div class="reloj">
                            <ul class="timer text-center">
                                <li id="hours">3</li>
                                <li id="point">:</li>
                                <li id="min">04</li>
                                <li id="sec">12</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
<<<<<<< HEAD
<<<<<<< HEAD
                        <div>
                            <a href="#" class="nav-link">
                                <h5 class="card-title text-center text-task">TAREAS</h5>
                            </a>                           
                        </div>
                        @if (empty($tasks))
                            <h4 class="text-center">No tienes tareas creadas</h4> 
=======
                        <a href="{{url('tareas')}}" class="nav-link card-title text-center">TAREAS</a>   
                        @if ($tasks->isEmpty())
                            <h5 class="text-center">No haz creado tareas</h5>
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
                        @else
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">Tarea</th>
                                        <th class="text-center">completado</th>            
                                    </tr>
                                </thead>
<<<<<<< HEAD
                                <tbody> 
                                    @foreach ($tasks as $k => $task)
                                        <tr>                              
                                            <td class="text-center">
                                                <a href="#"
                                                    class="text-decoration-none">
                                                    {{ $task->name }}
                                                </a>
                                            </td>
                                            <td class="text-center">                                                                               
                                                <div class="flip-switch flip-switch-text">
                                                <input type="checkbox" id="c{{$k}}">
                                                <label for="c{{$k}}"></label>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>                           
                            </table>  
                        @endif                         
=======
                        <a href=" {{route('tasks.index')}} " class="nav-link card-title text-center">TAREAS</a>                         
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">Tarea</th>
                                    <th class="text-center">completado</th>            
                                </tr>
                            </thead>                            
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>                              
                                        <td class="text-center">
                                            <a href="#" class="text-decoration-none">{{ $task->name }}</a>
                                        </td>
                                        <td class="text-center"> 
                                            @if ($task->completed == TRUE)
                                                <span class="task-completed task-yes">SI</span>
                                            @else
                                                <span class="task-completed task-no">NO</span>
                                            @endif                                                                        
                                           {{-- <div class="flip-switch flip-switch-text">
                                                <input type="checkbox" id="c3">
                                                <label for="c3"></label>
                                            </div>--}}
                                        </td>
                                    </tr>
                                @endforeach             
                            </tbody>
                        </table>                           
>>>>>>> 08 Octubre
                    </div>
                </div>
            </div>
        </div>
    </div>   
=======
                                 <tbody>
                                    @foreach ($tasks as $task)
                                        <tr>                              
                                            <td class="text-center">
                                                <a href="#" class="text-decoration-none">{{ $task->name }}</a>
                                            </td>
                                            <td class="text-center"> 
                                                @if ($task->completed == TRUE)
                                                    <span class="task-completed task-yes">SI</span>
                                                @else
                                                    <span class="task-completed task-no">NO</span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               @endif
                                            </td>
                                        </tr>
                                    @endforeach             
                                </tbody>
                            </table>        
                        @endif
                    </div>
                </div>
            </div>             
        </div>
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
@endsection