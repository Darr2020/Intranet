@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            <h3>Agregar evento</h3>
          </div>
          <div class="card-body">
            {!! Form::open(['route' => 'events.store']) !!}
              @include('admin.events.partials.form')
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
	
@endsection