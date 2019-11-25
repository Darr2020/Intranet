<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{ config('app.name', 'Laravel' ) }} ~ {!!$titulo!!}</title>

        <!-- Fonts -->
   		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	    <script src=" {{asset('vendor/js/jquery-calendar.min.js')}}"></script>
	    <script src=" {{asset('vendor/js/moment2.9.min.js')}}"></script>
	    <script src=" {{asset('vendor/js/fullcalendar.min.js')}}"></script>
   		<link rel="stylesheet" href="{{asset('vendor/css/fullcalendar.min.css')}}"/>  
      
    </head>
    <body>
        @include('partials.users.nav')
    	<div class="container-fluid">
		    <div class="row">
    			<div class="col-md-7">                    
    				<div class="card">
    					<div class="card-body">
        				  	{!! $calendar->calendar() !!}
            				{!! $calendar->script() !!}
    					</div>
                    </div>                   
				</div>
				<div class="col-md-5">
					@foreach ($events as $e)
						
					@endforeach
					<div class="card">
						<div class="card-header">
							<div class="row">
								<div class="col-md-6">
									<h5 class="text-success">{{ date("d/m/Y", strtotime($e->date_start)) }}<h5>
								</div>
								<div class="col-md-6">
									<h5 class="text-danger float-right">{{date("d/m/Y", strtotime($e->date_end))}}</h5>
								</div>
							</div>								
						</div>
						<div class="card-body">
							{!!$e->description!!}
						</div>
					</div>
				</div>
		    </div>
	   </div>
    </body>
</html>

	