@extends('admin.panel')

@section('contentAdmin')
	<div class="container">
		<div class="row">
<<<<<<< HEAD
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
=======
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
			
			<div class="col-md-10 offset-md-1">
				<h4 class="text-center">Listado de noticias</h4>
				<hr>
<<<<<<< HEAD
				<br>
				<small>{{$posts->total()}} Noticias | página {{$posts->currentPage()}} de {{$posts->lastPage()}} </small>
				<a href="{{ route('posts.create') }}"
					class="float-right"
					role="button" aria-pressed="true"><img src=" {{ asset('icons/create.svg') }}" style="width: 30px;" title="Crear Noticia">
				</a>
		 	
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th width="10px">Nro</th>
							<th>Titulo</th>
							<th>Resumen</th>
							<th>Estado</th>
							<th>&nbsp;</th>
							<th>&nbsp;</th>
							<th>&nbsp;</th>
=======
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
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
						</tr>
					</thead>
					<tbody>
						@foreach($posts as $post)
							<tr>
<<<<<<< HEAD
								<td >{{ $post->id }}</td>
								<td>{{ $post->title }}</td>
								<td>{{ $post->summary }}</td>
								<td>{{ $post->state }}</td>

								<td>
=======
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
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
									<a href="{{ route('posts.show', $post->id) }}"
									   	role="button">
									   	 <img src="{{ asset('icons/ver.svg') }}" title="Ver noticia">
									</a>
								</td>
<<<<<<< HEAD
								<td>
=======
								<td class="text-center" width="10px">
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
									<a href="{{ route('posts.edit', $post->id) }}"
									   role="button">
									   <img src="{{ asset('icons/edit.svg') }}" title="Editar noticia">
									</a>
								</td>
								
<<<<<<< HEAD
								<td width="10px">
=======
								<td class="text-center" width="10px">
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
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
