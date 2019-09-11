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

			<div class="col-md-9 offset-md-2">
				<a href="{{ route('events.create') }}"
					class="float-right"
					role="button" aria-pressed="true"><img src=" {{ asset('icons/create.svg') }}" style="width: 30px" title="Crear evento">
				</a>
				

				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Nro</th>
							<th>Titulo</th>
							<th>Inicia</th>
							<th>Finaliza</th>							
							<th>Estado</th>
							<th>&nbsp;</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						@foreach($events as $event)
							<tr>
								<td>{{ $event->id }}</td>
								<td>{{ $event->title }}</td>
								<td>{{ $event->date_start }}</td>
								<td>{{ $event->date_end }}</td>
								<td>{{ $event->state }}</td>							
								<td>
									<a href="{{ route('events.edit', $event->id) }}"
									   role="button">
									   <img src="{{ asset('icons/edit.svg') }}" title="Editar evento">
									</a>
								</td>
								
									<td>
										{!! Form::open([
											'route' => ['events.destroy', $event->id],
											'method' => 'DELETE']) !!}
											<button style="background: transparent; border: none;">
												<img src=" {{ asset('icons/delete.svg') }}" title="Eliminar evento">
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