@extends('layouts.app')
<<<<<<< HEAD

@section('content')
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-4">
                <h2>Directorio</h2> 
            </div>
            <div class="col-4">
                <form action=" {{ route('users.index') }} " method="GET" id="content2">
                    <input type="text" name="name" class="input" id="search-input">
                    <button type="reset" class="search" id="search-btn"></button>
                </form>
            </div>
        </div>        
        <div class="row">
            <div class="col-10">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Descripción</th>
                            <th class="text-center">¿Tarea Completada?</th>
                        </tr>
                    </thead>                  
                    <tbody>
                        @foreach ($tasks as $task)                   
                            <tr>   
                                <td class="text-center">{{ $task->id }}</td>
                                <td class="text-center">{{ $task->name }}</td>
                                <td class="text-center">{{ $task->description }}</td>
                                <td class="text-center"> {{ $task->completed }} </td>
                            </tr>
                            @endforeach                                  
                    </tbody>                  
                </table>
            </div>
        </div>
=======
@section('content')
    <div class="row justify-content-center">
       <tasks></tasks>
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
    </div>
@endsection
