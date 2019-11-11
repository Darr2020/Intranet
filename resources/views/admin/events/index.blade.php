@extends('admin.panel')

@section('contentAdmin')
<<<<<<< HEAD
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
=======
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-10 mt-5">
				<h3 class="text-center">Listado de eventos</h3>
				<hr>
				<br>
				<strong>{{$events->total()}} Roles | página {{$events->currentPage()}} de {{$events->lastPage()}} </strong>
				<a href="{{ route('events.create') }}" class="float-right ml-5">
					<img src=" {{ asset('icons/create.svg') }}" style="width: 30px;" title="Crear Rol">
				</a>
				
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th class="text-center">Titulo</th>
							<th class="text-center">Inicia</th>
							<th class="text-center">Finaliza</th>							
							<th class="text-center">Estado</th>
							<th colspan="2">Gestón</th>
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
						</tr>
					</thead>
					<tbody>
						@foreach($events as $event)
							<tr>
<<<<<<< HEAD
								<td>{{ $event->id }}</td>
								<td>{{ $event->title }}</td>
								<td>{{ $event->date_start }}</td>
								<td>{{ $event->date_end }}</td>
								<td>{{ $event->state }}</td>							
								<td>
=======
								<td class="text-center">{{$event->id }}</td>
								<td class="text-center">{{$event->title }}</td>
								<td class="text-center">{{date("d/m/Y", strtotime($event->date_start))}}</td>
								<td class="text-center">{{date("d/m/Y", strtotime($event->date_end))}}</td>
								<td class="text-center">
									@if ($event->state == 'PUBLISHED')
										<strong class="text-success">Evento publicado</strong>
									@else
										<strong class="text-danger">Guardado como borrador</strong>
									@endif
								</td>							
								<td width="10px">
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
									<a href="{{ route('events.edit', $event->id) }}"
									   role="button">
									   <img src="{{ asset('icons/edit.svg') }}" title="Editar evento">
									</a>
<<<<<<< HEAD
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
													
=======
								</td>								
								<td width="10px">
									{!! Form::open([
										'route' => ['events.destroy', $event->id],
										'method' => 'DELETE']) !!}
										<button style="background: transparent; border: none;">
											<img src=" {{ asset('icons/delete.svg') }}" title="Eliminar evento">
										</button>
									{!! Form::close() !!}
								</td>													
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection