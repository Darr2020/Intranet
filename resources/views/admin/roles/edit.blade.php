    @extends('admin.panel')

@section('contentAdmin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <h3 class="text-center">Editar Rol</h3> 
            <hr>
            <div class="card">              
                <div class="card-body">                    
                    {!! Form::model($role, ['route' => ['roles.update', $role->id],
                    'method' => 'PUT']) !!}

                        @include('admin.roles.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection