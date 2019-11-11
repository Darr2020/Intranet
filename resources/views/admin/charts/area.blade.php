@extends('admin.panel')

@section('contentAdmin')
<<<<<<< HEAD

=======
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
	<div class="container">
		<div class="card">
			<h3 class="text-center">Historico de Noticias</h3>
			<div id="Area"></div>
		</div>
	</div>
<<<<<<< HEAD

	<script>

		new Morris.Area({
			element: 'Area',
			data: [
				@foreach($postsYear as $post)
					{ 
=======
	<script>
		new Morris.Area({
			element: 'Area',
			data: [
				@foreach($postsYear as $post){  
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
						year:"{{$post->year}}", 
						noticias:"{{$post->total}}"  
					},
				@endforeach      
			],
			xkey: 'year',
			ykeys:  ['noticias'],
			labels: ['noticias'],
			fillOpacity: 0.6,
			hideHover: 'auto',
			behaveLikeLine: true,
			lineColors:['red'],
			pointFillColors:['white'],
			pointStrokeColors: ['black'],	
    	});
	</script>
@endsection
