@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-4">
                <h2>Directorio</h2> 
            </div>
            <div class="col-4">
                <form action=" {{ route('users.index') }} " method="GET" id="content2">
                    <input type="text" name="name" class="input" id="search-input">
                    <button type="reset" class="search" id="search-btn"></button>
                </form>
            </div>
        </div>        
        <div class="row">
            <div class="col-md-11">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Apellido</th>
                            <th class="text-center">Oficina</th>
                            <th class="text-center">Extensión</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Ultima conexión</th>
                        </tr>
                    </thead>
                    <div class="card-body">
                        <tbody>
                            @foreach($users as $user)
                                <tr>                              
                                    <td class="text-center">
                                        <a href="{{ route('users.show', $user->slug) }}"
                                            class="text-decoration-none">
                                            {{ $user->name }}
                                        </a>
                                    </td>
                                    <td class="text-center"> {{ $user->last_name }} </td>
                                    <td class="text-center"> {{ $user->departament }} </td>
                                    <td class="text-center"> {{ $user->extension }} </td>
                                    <td class="text-center"> {{ $user->email }}     </td>
                                    <td class="text-center"> {{ date('d/m/Y', strtotime($user->last_login)) }}</td>
                                </tr>
                            @endforeach             
                        </tbody>
                    </div>
                </table>
            </div>
        </div>
    </div>
@endsection
