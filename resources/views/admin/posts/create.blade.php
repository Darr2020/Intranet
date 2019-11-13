@extends('admin.panel')

@section('contentAdmin')

	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<h2 class="text-center">Crear Noticias</h2>
				<hr>
				<div class="card">
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