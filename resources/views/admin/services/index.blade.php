@extends('admin.panel')

@section('contentAdmin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-5">
            <h3 class="text-center">Listado de Servicios</h3>
            <hr>
            <br>
           {{-- <strong>{{$services->total()}} Servicios | página {{$services->currentPage()}} de {{$services->lastPage()}} </strong>--}}
            <a href="{{ route('services.create') }}" class="float-right">
                <img src=" {{ asset('icons/create.svg') }}" style="width: 30px;" title="Agregar servicio">
            </a>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center" width="10px">#</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Descripción</th>
                        <th class="text-center">Dirección</th>
                        <th class="text-center">Estado</th>
                        <th class="text-center" colspan="1">Gestión</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                    <tr>
                        <td class="text-center">{{ $service->id }}</td>
                        <td class="text-center">{{ $service->name }}</td>
                        <td class="text-center">{{ $service->description }}</td>
                        <td class="text-center">{{ $service->route }}</td>
                        <td class="text-center">
                            @if($service->state == 'ACTIVE')
                                <p class="text-success">Servicio inactivo</p>
                            @else
                                <p class="text-danger">Servicio inactivo</p>
                            @endif
                        </td>                        
                        @can('services.edit')
                            <td width="10px" class="text-center">
                                <a href="{{ route('services.edit', $service->id) }}" 
                                    style="width: 30px;">
                                    <img src="{{ asset('icons/edit.svg') }}" title="Editar servicio">
                                </a>
                            </td>
                        @endcan
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- $services->render() --}}
        </div>
    </div>
</div>
@endsection