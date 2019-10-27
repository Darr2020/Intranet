@extends('admin.panel')

@section('contentAdmin')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div class="card">
					<div class="card-header">
						<h3>Agregar Servicio</h3>
					</div>
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