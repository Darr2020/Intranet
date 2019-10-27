@extends('admin.panel')

@section('contentAdmin')
    <form action=" {{route('noticias')}} " 
        method="GET" id="content">                    
        <input type="text" name="title"  class="input" id="search-input">
        <button type="reset" class="search" id="search-btn"></button>
    </form> 
    <div class="col-md-11">
        @include('partials.users.directory')
    </div>
@endsection