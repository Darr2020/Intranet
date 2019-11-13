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
    	<div class="container">
		    <div class="row">
    			<div class="col-md-10 offset-md-1">                    
    				<div class="card">
    					<div class="card-body">
        				  	{!! $calendar->calendar() !!}
            				{!! $calendar->script() !!}
    					</div>
                    </div>
                   
    			</div>
		    </div>
	   </div>
    </body>
</html>

	