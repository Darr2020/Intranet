@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-md-6 offset-1">
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
                                    publicado {{ $post->created_at->diffForHumans() }} 
                                </small>
                            </div>
                        </div>
                        <br>
                    @endforeach
                    <div class="float-right">
                        {!! $posts->render() !!}
                    </div>
                </section>
            </div>
            <div class="col-md-5">
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
                    </div>
                </div>
            </div>
        </div>
@endsection