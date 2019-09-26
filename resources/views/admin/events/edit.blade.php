@extends('admin.panel')

@section('contentAdmin')

	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="card">
					<div class="card-header">
						<h3>Editar Evento</h3>
					</div>
					<div class="card-body">
						{!! Form::model($event, ['route' => ['events.update', $event->id],
						 'method' => 'PUT']) !!}

                        	 @include('admin.events.partials.form')

                    	{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection