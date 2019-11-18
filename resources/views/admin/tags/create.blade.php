@extends('admin.panel')

@section('contentAdmin')
<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h2 class="text-center">Agregar Etiqueta</h2>
				<hr>
				<div class="card">
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