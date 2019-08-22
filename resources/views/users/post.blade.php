@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-7 ">
		
		        <h3 class="title text-center">
		        	{{ $post->title }}
		        </h3>
	        	

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
					<div class="container">
				    	<p class="text-center">{{$post->summary}}</p>
				  	</div>
				</div>
	           
	            <div class="fm-card-content">		                
	                <div class="resumen">
	                    <p>{!! $post->content !!}</p>
	                </div>          		            
	            </div>
		            
		    </div>
		</div>
	</div>
@endsection     

           