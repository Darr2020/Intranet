@extends('admin.panel')

@section('contentAdmin')
	<div class="container">
		<div class="row">
			
			<div class="col-md-10 offset-md-1">
				<h4 class="text-center">Listado de noticias</h4>
				<hr>
				<br>				
				<strong>{{$posts->total()}} Noticias | página {{$posts->currentPage()}} de {{$posts->lastPage()}} </strong>
				<a href="{{ route('posts.create') }}" class="float-right">
					<img src=" {{ asset('icons/create.svg') }}" style="width: 30px;" title="Crear Noticia">
				</a>
				<table class="table table-striped">
					<thead>
						<tr>
							<th class="text-center" width="10px">Nro</th>
							<th class="text-center">Titulo</th>
							<th class="text-center">Resumen</th>
							<th class="text-center">Estado</th>
							<th class="text-center" colspan="3">Gestión</th>
						</tr>
					</thead>
					<tbody>
						@foreach($posts as $post)
							<tr>
								<td class="text-center">{{ $loop->iteration	}}</td>
								<td class="text-center">{{ $post->title }}</td>
								<td class="text-center">{{ $post->summary }}</td>
								<td class="text-center">
									@if ($post->state == 'PUBLISHED')
										<strong class="text-success">Noticia publicada</strong>
									@else
										<strong class="text-danger">Guardada como borrador</strong>
									@endif									
								</td>

								<td class="text-center" width="10px">
									<a href="{{ route('posts.show', $post->id) }}"
									   	role="button">
									   	 <img src="{{ asset('icons/ver.svg') }}" title="Ver noticia">
									</a>
								</td>
								<td class="text-center" width="10px">
									<a href="{{ route('posts.edit', $post->id) }}"
									   role="button">
									   <img src="{{ asset('icons/edit.svg') }}" title="Editar noticia">
									</a>
								</td>
								
								<td class="text-center" width="10px">
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
				{!! $posts->render() !!}
			</div>
		</div>
	</div>
@endsection
