@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="photo">
                <div class="circle text-center">
                    <img class="mt-4" src="{{asset('icons/personProfile.svg')}} " width="80">
                </div>
                <a href="#" class="mt-2">Agregar una imagen</a>
            </div>
        </div>
        <div class="col-md-6"> 
            <h1 class="name-profile">{{$user->name}} {{$user->last_name}}</h1>   

            <ul class="list-group list-group-flush mt-5">
                <li class="list-group-item">
                    <h5><img src=" {{asset('icons/email.svg')}}"> {{$user->email}}</h5>
                </li>
                <li class="list-group-item">
                    <h5><img src=" {{asset('icons/phone.svg')}}"> {{$user->extension}}</h5>
                </li>
            </ul>                
        </div>
        
    </div>
</div>

@endsection