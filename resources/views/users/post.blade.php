@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-10">		
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
@endsection     

           