@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row text-center">
			@foreach ($services as $service)
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="single-service">
						<div class="icon">
							<img src="{{ asset('icons/favorite.svg') }}">
						</div>	
						<h3>{{ $service->name }}</h3>
						<p>{!! $service->description !!}</p>
					</div>
				</div>
			@endforeach			
		</div>
	</div>
@endsection