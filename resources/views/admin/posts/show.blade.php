@extends('admin.panel')

@section('contentAdmin')

	<div class="container">
		<h2 class="text-center" style="color: #000">Vista previa de las Noticias</h2>
		<hr>
		<div class="row">
			<div class="col-md-6">
				<div class="card post">
					@if($post->image)
						<img src="{{ $post->image }}" class="card-img-top img-responsive">
					@endif
					<div class="card-body">
						<div class="title">
							<a href="{{ route('noticia', $post->slug) }}">{{ $post->title }}</a>
						</div>
						<div class="resumen">
							<p>{{ $post->summary }}</p>
						</div>
						<div class="continue">
							<a href="{{ route('noticia', $post->slug) }}">leer más &rarr;</a>
						</div>
					</div>
					<div class="card-footer">
						<small class="float-right"> 
							publicado {{ \Carbon\Carbon::parse($post->date_published  )->format('d/m/Y')}}  
						</small>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h2 class="text-center">{{ $post->title }}</h2>
				<hr>
				@if($post->image)
					<img src="{{ $post->image }}" class="img-fluid">
				@endif
				
				@foreach($post->tags as $tag)
					<a href="{{ route('etiqueta', $tag->slug) }}" 
						class="text-center badge badge-primary">
						{{ $tag->name }}
					</a>
				@endforeach
				<div class="jumbotron">
					<p class="text-center">{{$post->summary}}</p>
				</div>	           
				<div class="card-body">		                
					<div class="text-center" style="font-size: 22px">
						<p>{!! $post->description !!}</p>
					</div>          		            
				</div>	
			</div>
		</div>
	</div>


	<style>
	.post{
		box-shadow: 0px 4px 8px 0px rgba(23, 23, 23, 0.2);
		border-radius: 8px;
		transition: 0.4s;
	}
	.post:hover{ transform: rotate(-5deg);}
	.card .card-img-top{ max-width: 100%; }		
	
	.card .card-img-top:hover{
		opacity: 0.8;
		cursor: pointer;
	}
	
	.card-body .title a {
		text-decoration: none;
		color: #232323;
		font-size: 28px;
		font-family: 'nunito';
		font-weight: bold;
	}
	
	.card-body .title a:hover { color: dodgerblue; }
	
	.card-body .resumen p {
		color: #555;
		margin-top: 20px;
		font-size: 17px;
		overflow-wrap: break-word;
		text-align: justify;
		max-width: 100ch;
	}
	
	.card-body .continue a {
		text-decoration: none;
		color: dodgerblue;
		font-size: 15px;
	}
	.card-body .continue a:hover {
		text-decoration: underline;
	}
	</style>		
@endsection