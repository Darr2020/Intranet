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
				
				<p id="likeCount"> {{$post->likesCount}} </p>
				
				<p class="like" id="like"><img src=" {{asset('icons/favorite-red.svg')}} ">Me gusta</p>
				<p class="like" id="unLike">  </p>   

	            <div class="card-body">		                
	                <div class="text-center" style="font-size: 22px">
	                    <p>{!! $post->description !!}</p>
	                </div>          		            
	            </div>		            
		    </div>
		</div>	
	</div>

	<script type="text/javascript">

		@if($post->liked)
			$('#like').hide();
			$('#unLike').show();
		@else
			$('#like').show();
			$('#unLike').hide();
		@endif

		$('.like').on('click', function(){
			const user = {{Auth::user()->id}}

			$.ajax({
				type: 'get',
				url: ` {{ route('toggleLike', $post->slug) }} `,
				data: user, 
				cache: false,
				contentType: false,
				processData: false,
				success: function(data){
					if (data.like.isLiked) {
						$('#like').hide();
						$('#unLike').show();
						$('#likeCount').html('<img src=" {{asset('icons/favorite-red.svg')}} ">' + data.like.likes);
					}else{
						$('#like').show();
						$('#unLike').hide();
						$('#likeCount').html('<img src=" {{asset('icons/favorite-red.svg')}} ">' + data.like.likes)

					}
				}
			});
		});
	</script>
@endsection     

           