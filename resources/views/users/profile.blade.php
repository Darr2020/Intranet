@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="photo">
                <div class="circle text-center">
                    <img class="mt-4" src="{{asset('icons/personProfile.svg')}} " width="80">
                </div>
                <a href="#" class="mt-2">Agregar una imagen</a>
            </div>
        </div>
        <div class="col-md-8"> 
            <h1 class="name-profile">{{$user->name}} {{$user->last_name}} 
                @if(!$alias->isEmpty()) 
                    <strong><em class="text-primary text-lowercase">{{($user->alias)}}</em></strong>
                    <br>
                    <a class="text-lowercase" href="#">Editar alias</a>
                @else    
                    <a href="#">Agregar Alias</a>
                @endif
            </h1>   
            
            <table>
                <thead>
                <tr>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hola</td>
                        <td>como</td>
                    </tr>
                    <tr>
                            <td>Holaaa</td>
                            <td>comooo</td>
                        </tr>
                </tbody>
            </table>
                
        </div>
    </div>
</div>

@endsection