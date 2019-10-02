@extends('admin.panel')

@section('contentAdmin')

	<div class="container">
		<div class="card">
			<h3 class="text-center">Historico de Noticias</h3>
			<div id="Area"></div>
		</div>
	</div>

	<script>

		new Morris.Area({
			element: 'Area',
			data: [
				@foreach($postsYear as $post)
					{ 
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
