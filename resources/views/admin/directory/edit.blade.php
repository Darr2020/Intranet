@extends('admin.panel')

@section('contentAdmin')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <h4 class="text-center">Asignar Rol</h4>
            <div class="card">
                <div class="card-body">      
                    {!! Form::model($user, ['route' => ['users.update', $user->id],
                    'method' => 'PUT']) !!}

                        @include('admin.directory.partials.form')
                        
                    {!! Form::close() !!}
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection