@extends('admin.panel')

@section('contentAdmin')

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<h3 class="text-center">Eventos</h3>
				<hr>
				<div class="card">					
					<div id="pieChartEvents"></div>
					<div class="card-footer text-center">
						Un total de <strong class="text-info">{{$TEvent}}</strong> Eventos 
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h3 class="text-center">Noticias</h3>
				<hr>
				<div class="card">
					<div id="pieChartPosts"></div>
					<div class="card-footer text-center">
						Un total de <strong class="text-info">{{$TPost}}</strong> Noticias 
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<hr>
				<h3 class="text-center">Servicios</h3>
				<hr>
				<div class="card">
					<div id="pieChartServices"></div>	
					<div class="card-footer text-center">
						Un total de <strong class="text-info">{{$Tservice}}</strong> Servicios 
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		new Morris.Donut({
			element: 'pieChartEvents',
			data: [ 
				{label: "Eventos publicados", value:" {{$eventsP}} "},
				{label: "Eventos como borrador", value:" {{$eventsD}} "},
							  
			],			
    	});
		new Morris.Donut({
			element: 'pieChartPosts',
			data: [ 
				{label: "Noticias publicadas", value:" {{$postsP}} "},	
				{label: "Noticias como borrador", value:" {{$postsD}} "},		
			],
			donutColors:['red'],
		});
		
		new Morris.Donut({
			element: 'pieChartServices',
			data: [ 
				{label: "Servicios activos", value:" {{$servicesA}} "},	
				{label: "Servicios inactivos", value:" {{$servicesD}} "},		
			],
			donutColors:['red'],
    	});
	</script>
@endsection
