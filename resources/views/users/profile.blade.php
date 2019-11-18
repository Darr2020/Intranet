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
        <div class="col-md-7"> 
            <h1 class="name-profile">{{$user->name}} {{$user->last_name}}</h1>   

            <ul class="list-group list-group-flush mt-5">
               
                <li class="list-group-item">
                    <h5> <strong>Extensión:     </strong> {{$user->extension}} <img class="float-right" src=" {{asset('icons/phone.svg')}}"></h5> 
                    <h5> <strong>Correo: </strong> {{$user->email}} <img class="float-right" src=" {{asset('icons/email.svg')}}"></h5>
                    <h5> <strong>Ofinica: </strong> {{$user->office}} <img class="float-right" src=" {{asset('icons/work.svg')}}"> </h5>
                </li>
                <li class="list-group-item">
                    <h4 class="text-justify"> <strong>Sobre mi:</strong> {{$user->biography}}</h4>
                </li>
            </ul>                
        </div>
        
    </div>
</div>

@endsection