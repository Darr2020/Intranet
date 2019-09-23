@extends('admin.panel')

@section('contentAdmin')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<br>
				<div class="card">
					<div class="card-header">
						<h4 class="text-center">Crear Etiqueta</h4>
					</div>
					<div class="card-body">
						{!! Form::open(['route' => 'tags.store']) !!}
							@include('admin.tags.partials.form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection