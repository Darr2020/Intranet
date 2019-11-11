<<<<<<< HEAD
@extends('admin.panel')
=======
    @extends('admin.panel')
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150

@section('contentAdmin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
<<<<<<< HEAD
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Editar Rol</h4>
                </div>

                <div class="card-body">                    
                    {!! Form::model($role, ['route' => ['roles.update', $role->id],
                    'method' => 'PUT']) !!}

                        @include('admin.roles.partials.form')
                        
=======
            <h2 class="text-center">Editar Rol</h2> 
            <hr>
            <div class="card">              
                <div class="card-body">                    
                    {!! Form::model($role, ['route' => ['roles.update', $role->id],'method' => 'PUT']) !!}
                        @include('admin.roles.partials.form')                        
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection