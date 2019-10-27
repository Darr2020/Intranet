<div class="form-row">
	<div class="col">
		<div class="form-group">
			{{ Form::label('name', 'Nombre:') }}
			{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{{ Form::label('slug', 'URL:') }}
			{{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'readonly']) }}
		</div>
	</div>
</div>
<div class="form-group">
	{{ Form::label('description', 'Descripción:') }}
	{{ Form::textarea('description', null, ['class' => 'form-control', 'style' => 'height:100px;']) }}
</div>
<hr>
<h4>Permiso especial</h4>
<div class="form-group">
 	{{ Form::radio('special', 'all-access') }} Acceso total
</div>
<hr>
<h4 class="text-center">Lista de permisos</h4>
<div class="form-group">
	<ul class="list-group">
		@foreach($permissions as $permission)
	    <li class="list-group-item">
	        <label>
	        	{{ Form::checkbox('permissions[]', $permission->id, null) }}
	        	{{ $permission->name }}
	        	<em>({{ $permission->description }})</em>
	        </label>
	    </li>
	    @endforeach
    </ul>
</div>
<div class="form-group">
	{{ Form::submit('Guardar rol', ['class' => 'btn btn-primary btn-lg btn-block']) }}
</div>

@section('scripts')
	<script>
		$(document).ready(function(){
        	$("#name").keyup(function(){
                var cadena = $(this).val();
                string_to_slug(cadena);
            });
		});

		function string_to_slug (str) {
	        str = str.replace(/^\s+|\s+$/g, '');
	        str = str.toLowerCase();

	        //quita acentos, cambia la ñ por n, etc
	        var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
	        var to   = "aaaaeeeeiiiioooouuuunc------";

	        for (var i=0, l=from.length ; i<l ; i++) {
	            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
	        }

	        str = str.replace(/[^a-z0-9 -]/g, '') // quita caracteres invalidos
                .replace(/\s+/g, '-') // reemplaza los espacios por -
                .replace(/-+/g, '-'); // quita las plecas

           return $("#slug").val(str);
		}
	</script>
@endsection