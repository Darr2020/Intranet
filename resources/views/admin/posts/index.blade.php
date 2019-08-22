@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			@if(count($errors))
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-6 offset-md-2">
	                        <div class="alert alert-danger">
	                            <ul>
	                                @foreach($errors->all() as $error)
	                                <li>{{ $error }}</li>
	                                @endforeach
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	            </div>
        	@endif

			<div class="col-md-10 offset-md-1">
				<a href="{{ route('posts.create') }}"
					class="float-right"
					role="button" aria-pressed="true"><img src=" {{ asset('icons/create.svg') }}" style="width: 30px;" title="Crear Noticia">
				</a>
				

				<table id="posts" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th width="10px">Nro</th>
							<th>Titulo</th>
							<th>Resumen</th>
							<th>Estado</th>
							<th>&nbsp;</th>
							<th>&nbsp;</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						@foreach($posts as $post)
							<tr>
								<td >{{ $post->id }}</td>
								<td>{{ $post->title }}</td>
								<td>{{ $post->summary }}</td>
								<td>{{ $post->state }}</td>

								<td>
									<a href="{{ route('posts.show', $post->id) }}"
									   	role="button">
									   	 <img src="{{ asset('icons/ver.svg') }}" title="Ver noticia">
									</a>
								</td>
								<td>
									<a href="{{ route('posts.edit', $post->id) }}"
									   role="button">
									   <img src="{{ asset('icons/edit.svg') }}" title="Editar noticia">
									</a>
								</td>
								
									<td width="10px">
										{!! Form::open([
											'route' => ['posts.destroy', $post->id],
											'method' => 'DELETE']) !!}
											<button style="background: transparent; border: none;">
												<img src=" {{ asset('icons/delete.svg') }}" title="Eliminar noticia">
											</button>
										{!! Form::close() !!}
									</td>
												
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection

@section('data-table')
	<script>
		$(document).ready(function() {
	    	$('#posts').DataTable({
	    		"language": {
	    			"info": "_TOTAL_ Noticias",
	    			"search": "Buscar noticia:",
	    			"paginate": {
	    				"next": "siguiente",
	    				"previous": "Anterior",
	    			},
	    			"lengthMenu": 'Mostrar <select>' + 
	    				'<option value="10">10</option>'+
	    				'<option value="20">20</option>'+
	    				'<option value="40">40</option>'+
	    				'<option value="60">60</option>'+
	    				'<option value="-1">Todos</option>'+
	    				'</select> Noticias',
	    			"loadingRecords": "Cargando...",
	    			"processing": "Procesando...",
	    			"emptyTable": "No hay noticias creadas",
	    			"zeroRecords": "Esa noticia no existe",
	    			
	    		}
	    	});
		});
	</script>
@endsection