@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-7 offset-md-2">
				<div class="card">
					<div class="card-header">
						Eitquetas

						<a href="{{ route('tags.create') }}"
							class="btn btn-primary  float-right"
							role="button" aria-pressed="true">Crear</a>
					</div>
					<div class="card-body">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th width="10px">Nro</th>
									<th>Nombre</th>
									<th colspan="3">&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								@foreach($tags as $tag)
									<tr>
										<td>{{ $tag->id }}</td>
										<td>{{ $tag->name }}</td>
										<td width="10px">
											<a href="{{ route('tags.edit', $tag->id) }}"
											   class="btn btn-warning"	role="button" aria-pressed="true">
												Editar
											</a>
										</td>
										<td width="10px">
											{!! Form::open([
												'route' => ['tags.destroy', $tag->id],
												'method' => 'DELETE']) !!}
												<button class="btn btn-danger">Eliminar</button>
											{!! Form::close() !!}
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection