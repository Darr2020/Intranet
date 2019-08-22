{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-row">
	<div class="col">
		<div class="form-group">
			{{ Form::label('title', 'Titulo:') }}
			{{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title']) }}
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			{{ Form::label('slug', 'URL:') }}
			{{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'readonly' ]) }}
		</div>
	</div>
</div>
<div class="custom-file">
	<div class="form-group">
		{{ Form::label('image', 'Archivo...', ['class' => 'custom-file-label']) }}
		{{ Form::file('image', ['class' => 'custom-file-input', 'lang' => 'es']) }}
	</div>
</div>

<div class="row mt-4">
	<div class="col-md-8">
		<div class="form-group">
			{{ Form::label('slug', 'Estado:') }}
			<label>
				{{ Form::radio('state', 'PUBLISHED') }} Publicado  
			</label>
			<label>
				{{ Form::radio('state', 'DRAFT') }} Borrador.
			</label>
		</div>
	</div>
	<div class="col-md-4">
		<div class="btn-group">
			<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
   			Etiquetas:
 			</button>
		   	<div class="dropdown-menu dropdown-menu-right">
				@foreach($tags as $tag)
					<a class="dropdown-item">{{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}</a>
				@endforeach	
		   	</div>
		</div>
	</div>
</div>
	
<div class="form-group">
    {{ Form::label('summary', 'Resumen:') }}
    {{ Form::textarea('summary', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>
	

<div class="form-group">
    {{ Form::label('content', 'Contenido:') }}
    {{ Form::textarea('content', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::submit('Guardar noticia', ['class' => 'btn btn-color btn-lg btn-block']) }}
</div>

@section('scripts')

    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}" ></script>

	<script>
		$(document).ready(function(){
        	$("#title").keyup(function(){
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

		CKEDITOR.config.heigth = 500;
		CKEDITOR.config.width = 'auto';

		CKEDITOR.replace('content')
	</script>
@endsection