
@extends('admin.panel')

@section('contentAdmin')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>Editar Servicio</h3>
                    </div>
                    <div class="card-body">
                        {!! Form::model($service, ['route' => ['services.update', $service->id],
                            'method' => 'PUT']) !!}
                                @include('admin.services.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 