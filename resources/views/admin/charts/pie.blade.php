@extends('admin.panel')

@section('contentAdmin')

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<h3 class="text-center">Publicaciones</h3>
					<div id="pieChartEvents"></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<h3 class="text-center">Borradores</h3>
					<div id="pieChartPosts"></div>
				</div>
			</div>
		</div>
	</div>
	<script>
		new Morris.Donut({
			element: 'pieChartEvents',
			data: [ 
				{label: "Eventos", value:" {{$eventsP}} "},
				{label: "Noticias", value:" {{$postsP}} "},				  
			],			
    	});
		new Morris.Donut({
			element: 'pieChartPosts',
			data: [ 
				{label: "Eventos", value:" {{$eventsD}} "},
				{label: "Noticias", value:" {{$postsD}} "},		
			],
			donutColors:['black'],
    	});
	</script>
@endsection
