@extends('admin.panel')

@section('contentAdmin')
    <div class="row justify-content-center">
        <form class="form-inline my-2 mb-2 my-lg-0" action=" {{route('listar.users')}}" method="GET">
            <input class="form-control mr-sm-2" type="search" placeholder="Nombre o Oficina" name="q" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form> 
    
    <br>
    <div class="col-md-11">
        @include('partials.users.directory')
    </div>
</div>
@endsection