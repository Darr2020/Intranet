@extends('admin.panel')

@section('contentAdmin')
<<<<<<< HEAD
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Apellido</th>
                        <th class="text-center">Extensión</th>
                        <th class="text-center">Email</th>
                    </tr>
                </thead>
                <div class="card-body">
                    <tbody>
                        @foreach($users as $user)
                            <tr>                              
                                <td class="text-center">
                                    <a href="{{ route('users.edit', $user->id) }}"
                                        class="text-decoration-none">
                                        {{ $user->name }}
                                    </a>
                                </td>
                                <td class="text-center"> {{ $user->last_name }} </td>
                                <td class="text-center"> {{ $user->extension }} </td>
                                <td class="text-center"> {{ $user->email }}     </td>
                            </tr>
                        @endforeach             
                    </tbody>
                </div>
            </table>
        </div>
    </div>
=======
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
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
@endsection