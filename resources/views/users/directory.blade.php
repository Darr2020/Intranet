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

            <table class="table ">
                <thead>
                    <tr>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Apellido</th>
                        <th class="text-center">Extensión</th>
                        <th class="text-center">Email</th>
                        <th colspan="3">&nbsp;</th>

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
                                <td class="text-center"> {{ $user->extension }} </td>
                                <td class="text-center"> {{ $user->email }} </td>
                                @can('users.edit')
                                    <td width="10px">
                                        <a href="{{ route('users.edit', $user->id) }}" 
                                            role="button">
                                       <img src="{{ asset('icons/edit.svg') }}" title="Editar evento">
                                        </a>
                                    </td>
                                @endcan
                            </tr>
                        @endforeach             
                  </tbody>
                </div>
            </table>
    </div>
@endsection
