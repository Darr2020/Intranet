@extends('admin.panel')

@section('contentAdmin')

	<div class="container">
		<div class="card">
			<h3 class="text-center">Historico de Noticias</h3>
			<div id="linechart"></div>
		</div>
	</div>

	<script>
		new Morris.Bar({
			element: 'linechart',
			data: [
				@foreach($postsYear as $post)
					{ 
						year:"{{$post->year}}", 
						value:"{{$post->total}}"  
					},
				@endforeach        
			],
			xkey: 'year',
			ykeys:  ['value'],
			labels: ['Value']
    	});
	</script>
@endsection
