@extends('admin.panel')

@section('contentAdmin')
<<<<<<< HEAD
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   <h4>Todos los roles</h4>                
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th colspan="2">
                                    @can('roles.create')
                                        <a href="{{ route('roles.create') }}" 
                                            class="float-right">
                                            <img src="{{ asset('icons/create.svg') }}" style="width: 30px" title="Crear rol">
                                        </a>
                                     @endcan
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->description }}</td>
                                
                                @can('roles.edit')
                                    <td width="10px">
                                        <a href="{{ route('roles.edit', $role->id) }}" 
                                            style="width: 30px;">
                                            <img src="{{ asset('icons/edit.svg') }}" title="Editar rol">
                                        </a>
                                    </td>
                                @endcan
                                @can('roles.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['roles.destroy', $role->id], 
                                    'method' => 'DELETE']) !!}
                                        <button style="background: none; border: none; width: 30px;">
                                            <img src="{{ asset('icons/delete.svg') }}" titlte="Eliminar rol">
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $roles->render() }}
                </div>
            </div>
=======
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-5">
            <h3 class="text-center">Listado de roles</h3>
            <hr>
            <br>
            <strong>{{$roles->total()}} Roles | página {{$roles->currentPage()}} de {{$roles->lastPage()}} </strong>
            <a href="{{ route('roles.create') }}" class="float-right ml-5">
                <img src=" {{ asset('icons/create.svg') }}" style="width: 30px;" title="Crear Rol">
            </a>
            <a href="{{ route('listar.users') }}" role="button" class="btn btn-outline-success float-right ">Asignar rol</a>
            
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center" width="10px">#</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Descripción</th>
                        <th class="text-center" colspan="2">Gestión</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                    <tr>
                        <td class="text-center">{{ $role->id }}</td>
                        <td class="text-center">{{ $role->name }}</td>
                        <td class="text-center">{{ $role->description }}</td>                        
                        @can('roles.edit')
                            <td width="10px">
                                <a href="{{ route('roles.edit', $role->id) }}" 
                                    style="width: 30px;">
                                    <img src="{{ asset('icons/edit.svg') }}" title="Editar rol">
                                </a>
                            </td>
                        @endcan
                        @can('roles.destroy')
                        <td width="10px">
                            {!! Form::open(['route' => ['roles.destroy', $role->id], 
                            'method' => 'DELETE']) !!}
                                <button style="background: none; border: none; width: 30px;">
                                    <img src="{{ asset('icons/delete.svg') }}" titlte="Eliminar rol">
                                </button>
                            {!! Form::close() !!}
                        </td>
                        @endcan
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $roles->render() }}
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
        </div>
    </div>
</div>
@endsection