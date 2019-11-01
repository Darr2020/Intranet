@extends('admin.panel')

@section('contentAdmin')
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
						</tr>
					</thead>
					<tbody>
						@foreach($events as $event)
							<tr>
								<td class="text-center">{{$event->id }}</td>
								<td class="text-center">{{$event->title }}</td>
								<td class="text-center">{{date("d/m/Y", strtotime($event->date_start))}}</td>
								<td class="text-center">{{date("d/m/Y", strtotime($event->date_end))}}</td>
								<td class="text-center">
									@if ($event->state == 'PUBLISHED')
										<strong class="text-success">Evento publicado</strong>
									@else
										<strong class="text-danger">Guardada como borrador</strong>
									@endif
								</td>							
								<td width="10px">
									<a href="{{ route('events.edit', $event->id) }}"
									   role="button">
									   <img src="{{ asset('icons/edit.svg') }}" title="Editar evento">
									</a>
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
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection