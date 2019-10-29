@extends('admin.panel')

@section('contentAdmin')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 offset-md-2">
				<h3 class="text-center">Agregar Servicio</h3>
				<hr>
				<div class="card">					
					<div class="card-body">
						{!! Form::open(['route' => 'services.store']) !!}
							@include('admin.services.partials.form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection	