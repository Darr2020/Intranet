@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="card">
					<div class="card-header">
						<h3>Crear Etiqueta</h3>
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