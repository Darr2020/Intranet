@extends('admin.panel')

@section('contentAdmin')

<<<<<<< HEAD
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
=======
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
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
				</div>
			</div>
		</div>
	</div>
<<<<<<< HEAD

=======
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
	<script>
		new Morris.Donut({
			element: 'pieChartEvents',
			data: [ 
<<<<<<< HEAD
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
=======
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
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
    	});
	</script>
@endsection
