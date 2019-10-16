@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-4">
                <h2>Mis Tareas</h2> 
            </div>
            <div class="col-4">
                @if ($tasks->isEmpty())
                    <h2>Crea tus tareas</h2> 
                @else
                    <form action=" {{ route('tasks.index') }} " method="GET" id="content2">
                        <input type="text" name="name" class="input" id="search-input">
                        <button type="reset" class="search" id="search-btn"></button>
                    </form>
                @endif                
            </div>
        </div>        
        <div class="row">
            <div class="col-md-11">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th width="10px" class="text-center">#</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Descripción</th>
                            <th class="text-center">¿Tarea Completada?</th>
                            <th class="text-center">
                                <img src=" {{asset('icons/create-task.svg')}} " style="width:25px" title="Crear tarea">
                            </th>
                        </tr> 
                    </thead>                  
                    <tbody>
                        @foreach ($tasks as $task)                   
                            <tr>   
                                <td class="text-center">{{ $task->id }}</td>
                                <td class="text-center">{{ $task->name }}</td>
                                <td class="text-center">{{ $task->description }}</td>
                                @if ($task->completed == TRUE)
                                    <td class="text-center text-success font-weight-bold">SI</td>
                                @else
                                    <td class="text-center text-danger font-weight-bold">NO</td>
                                @endif
                                <td class="text-center">
                                    <a href=""><img src=" {{asset('icons/edit.svg')}} " alt=""></a>
                                    <a href=""><img src=" {{asset('icons/delete.svg')}} " alt=""></a>
                                </td>
                            </tr>
                            @endforeach                                  
                    </tbody>                  
                </table>
            </div>
        </div>
    </div>
@endsection
