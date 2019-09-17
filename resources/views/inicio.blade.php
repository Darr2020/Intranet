@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
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
                
            <div class="col-md-6">
                <form action=" {{route('noticias')}} " 
                    method="GET" id="content">
                    
                    <input type="text" name="title" class="input" id="search-input">
                    <button type="reset" class="search" id="search-btn"></button>

                </form>  
                <section>
                    @foreach($posts as $post)
                        <div class="fm-card">
                            <div class="fm-card-header">
                                @if($post->image)
                                    <img src="{{ $post->image }}" class="img-responsive">
                                @endif
                            </div>
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
                            <div class="fm-card-footer">
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

            <div class="col-md-3">
                <section class="tarea">
                    <section class="content-tarea">
                        <section class="top">
                            <div id="welcome">Hola {{ Auth::user()->name }}</div>
                                <div class="reloj">
                                    <ul class="timer">
                                        <li id="hours">3</li>
                                        <li id="point">:</li>
                                        <li id="min">04</li>
                                        <li id="sec">12</li>
                                    </ul>
                                </div>
                        </section>
                        <section class="tarea-body">
                        <section class="account">En proceso de creacion<span><img src="{{ asset('icons/tareas.svg') }}" alt=""></span></section>
                        <section class="content-bottom">
                        <ul>
                          <li>
                            <span class="fa fa-github"></span>
                            <section id="title1" class="title-tarea">Tareas</section>
                            <section class="text">CCada usuario podra crear tareas con un tiempo especifico</section>
                          </li>          
                                  
                        </ul>
                        </section>
                        </section>
                    </section>
                </section>
            </div>
        </div>
    </div>

   
@endsection