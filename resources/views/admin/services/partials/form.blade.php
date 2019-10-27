
{{ Form::hidden('user_id', auth()->user()->id) }}
@csrf

<div class="form-group">
    <h5>{{ Form::label('name', 'name:') }}</h5>
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    <h5>{{ Form::label('description', 'Descripción:') }}</h5>
    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>
	
<div class="form-group">
	{{ Form::submit('Agregar servicio', ['class' => 'btn btn-primary btn-lg btn-block']) }}
</div>
