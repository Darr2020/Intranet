@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="card">
					<div class="card-header">
						<h3>Noticia</h3>
					</div>
					<div class="card-body">
						<p><strong>Titulo: </strong>    {{ $post->title }}</p>
						<p><strong>Slug: </strong>	    {{ $post->slug }}</p>
						<p><strong>Contenido: </strong> {!! $post->content !!}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection