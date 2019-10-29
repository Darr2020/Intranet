<strong>{{$users->total()}} Usuarios | Página {{$users->currentPage()}} de {{$users->lastPage()}} </strong>
<table class="table">
    <thead>
        <tr>
            <th class="text-center">Nombre</th>
            <th class="text-center">Apellido</th>
            <th class="text-center">Oficina</th>
            <th class="text-center">Extensión</th>
            <th class="text-center">Email</th>
            @if (Request::path() == 'directorio')
                <th class="text-center">Ultima conexión</th>
            @else
                    
            @endif            
        </tr>
    </thead>        
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
                <td class="text-center"> {{ $user->office }} </td>
                <td class="text-center"> {{ $user->extension }} </td>
                <td class="text-center"> {{ $user->email }}     </td>
                @if (Request::path() == 'directorio')
                    <td class="text-center"> {{ date('d/m/Y', strtotime($user->last_login)) }}</td>
                @else
                    
                @endif                
            </tr>
        @endforeach             
    </tbody>        
</table>