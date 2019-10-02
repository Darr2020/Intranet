@extends('admin.panel')

@section('contentAdmin')
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
@endsection