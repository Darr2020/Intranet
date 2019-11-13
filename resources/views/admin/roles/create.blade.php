@extends('admin.panel')

@section('contentAdmin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <h3 class="text-center">Crear Rol</h3>  
            <hr>
            <div class="card">
                <div class="card-body">                    
                    {{ Form::open(['route' => 'roles.store']) }}
                        @include('admin.roles.partials.form')                        
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection