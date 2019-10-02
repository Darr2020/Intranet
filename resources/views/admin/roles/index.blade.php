@extends('admin.panel')

@section('contentAdmin')
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
        </div>
    </div>
</div>
@endsection