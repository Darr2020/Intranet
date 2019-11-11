
{{ Form::hidden('user_id', auth()->user()->id) }}
@csrf

<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            <h5>{{ Form::label('name', 'Nombre del servicio:') }}</h5>
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            <h5>{{ Form::label('route', 'Dirección del servicio:') }}</h5>
            {{ Form::text('route', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-md-5 offset-md-1">
        <div class="form-group">
            <h5>{{ Form::label('slug', 'Estado del servicio:') }}</h5>
            <ul class="list-group">
                <li class="list-group-item">
                    <label>{{ Form::radio('state', 'ACTIVE') }} <strong class="text-success">Activar servicio</strong></label>
                </li>
                <li class="list-group-item">
                    <label>{{ Form::radio('state', 'DEACTIVATED') }} <strong class="text-danger ">Desactivar servicio</strong></label>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="form-group">
    <h5>{{ Form::label('description', 'Descripción del servicio:') }}</h5>
    {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description']) }}
</div>
	
<div class="form-group">
	{{ Form::submit('Agregar servicio', ['class' => 'btn btn-primary btn-lg btn-block']) }}
</div>

@section('scripts')
	<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}" ></script>

	<script>	
		CKEDITOR.config.heigth = 500;
		CKEDITOR.config.width = 'auto';
		CKEDITOR.replace('description');
	</script>
@endsection
