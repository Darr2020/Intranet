@extends('admin.panel')

@section('contentAdmin')

	<div class="container">
		<div class="card">
			<h3 class="text-center">Historico de Eventos</h3>
			<div id="barChart"></div>
		</div>
	</div>

	<script>
		new Morris.Bar({
			element: 'barChart',
			data: [
				@foreach($eventsYear as $events)
					{ 
						year:"{{$events->year}}", 
						eventos:"{{$events->total}}"  
					},
				@endforeach        
			],
			xkey: 'year',
			ykeys:  ['eventos'],
			labels: ['eventos'],
			barColors:['#36b9cc'],
			hideHover: 'auto',
    	});
	</script>
@endsection
