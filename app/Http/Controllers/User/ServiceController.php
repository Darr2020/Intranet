<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;

class ServiceController extends Controller{
   
    public function services(){
        $titulo = 'Servicios';
        $services = Service::where('state', 'ACTIVE')->orderBy('id', 'DESC')->get();
        return view('users.services', compact('titulo', 'services'));
    }
}
