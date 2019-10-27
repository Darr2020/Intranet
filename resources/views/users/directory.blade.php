@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <h2>Directorio</h2> 
            </div>
            <div class="col-md-4 offset-md-2">
                <form action=" {{ route('users.index') }} " method="GET" id="content2">
                    <input type="text" name="name" class="input" id="search-input">
                    <button type="reset" class="search" id="search-btn"></button>
                </form>
            </div>
        </div>        
        <div class="row">
            <div class="col-md-11">
               @include('partials.users.directory')
            </div>
        </div>
    </div>
@endsection
