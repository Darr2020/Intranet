@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<style>
	
</style>

<div class="service-area service-padding">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="single-service">
						<div class="icon">
							<img src="{{ asset('icons/favorite.svg') }}">
						</div>
						<h3>Lorem</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="single-service">
						<div class="icon">
							<img src="{{ asset('icons/favorite.svg') }}">
						</div>
						<h3>Lorem</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="single-service">
						<div class="icon">
							<img src="{{ asset('icons/favorite.svg') }}">
						</div>
						<h3>Lorem</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
=======
	<div class="container">
		<div class="row text-center">
			@foreach ($services as $service)
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="single-service">
						<div class="icon">
							<img src="{{ asset('icons/favorite.svg') }}">
<<<<<<< HEAD
						</div>
						<h3>Lorem</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>

=======
						</div>	
						<h3>{{ $service->name }}</h3>
						<p>{!! $service->description !!}</p>
					</div>
				</div>
			@endforeach			
		</div>
	</div>
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
@endsection