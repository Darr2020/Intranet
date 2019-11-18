@extends('admin.panel')

@section('contentAdmin')
    <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-11 mt-4">
                    <h2 class="text-center">Auditoría</h2>
                    <h5 class="text-center">Acciones que realizan los usuarios con distintas permisologías</h5>
                    <hr>
                    <br>
                    <strong>{{$trace->total()}} Traza | página {{$trace->currentPage()}} de {{$trace->lastPage()}} </strong>          
                                                                                                      
                    <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center" width="10px">#</th>
                            <th class="text-center">Usuario</th>
                            <th class="text-center">Departamento</th>
                            <th class="text-center">Acción</th>
                            <th class="text-center">Tipo de acción</th>
                            <th class="text-center">Descripción</th>
                            <th class="text-center">Fecha de Acción</th>
                        </tr>
                    </thead>
                <tbody>
                    @foreach ($trace as $t => $user)
                        <tr>
                            <td>{{ $loop->iteration	}}</td>
                            <td class="text-center">{{$user->user->name}} {{$user->user->last_name}}</td>
                            <td class="text-center">{{$user->user->office}}</td>
                            <td class="text-center">{{$user->action}}</td>
                            <td class="text-center">
                                @if($user->type_action == 'CREATE')
                                    <span class="text-success">Creación</span>
                                @else
                                    <span class="text-warning">Actualización</span>                                    
                                @endif                                
                            </td>
                            <td class="text-center">{{$user->description}}</td>
                            <td class="text-center">{{$user->created_at->diffForHumans()}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        {{ $trace->render()}}
    </div>
  </div>
@endsection