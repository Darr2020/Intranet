<div class="form-group">
	{{ Form::label('name', 'Nombre:') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'readonly']) }}
</div>
<hr>
<h5>Lista de roles</h5>
<div class="form-group">
	<ul class="list-group">
		@foreach($roles as $role)
	    <li class="list-group-item">
	        <label>
	        	{{ Form::checkbox('roles[]', $role->id, null) }}
	        	{{ $role->name }}
	        	<em>({{ $role->description }})</em>
	        </label>
	    </li>
	    @endforeach
    </ul>
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>