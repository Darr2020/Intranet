@extends('admin.panel')

@section('contentAdmin')

	<div class="container">
		<div class="row">
<<<<<<< HEAD
			<div class="col-md-8 offset-md-2">
				<div class="card">
					<div class="card-header">
						<h3>Crear Noticias</h3>
					</div>
=======
			<div class="col-md-10 offset-md-1">
				<h2 class="text-center">Crear Noticias</h2>
				<hr>
				<div class="card">
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
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