@extends('admin.panel')

@section('contentAdmin')

	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="card">
					<div class="card-header">
						<h3>Crear Noticias</h3>
					</div>
					<div class="card-body">
						{!! Form::open(['route' => 'posts.store', 'files'=> true]) !!}
							@include('admin.posts.partials.form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection