@extends('admin.panel')

@section('contentAdmin')

	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<h2 class="text-center">Editar Noticias</h2>
				<hr>
				<div class="card">
					<div class="card-body">
						{!! Form::model($post, ['route' => ['posts.update', $post->id],
						 'method' => 'PUT', 'files' => true]) !!}

                        	 @include('admin.posts.partials.form')

                    	{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection