<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
=======
use App\Service;
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150

class ServiceController extends Controller{
   
    public function services(){
        $titulo = 'Servicios';
<<<<<<< HEAD
        return view('users.services', compact('titulo'));
=======
        $services = Service::where('state', 'ACTIVE')->orderBy('id', 'DESC')->get();
        return view('users.services', compact('titulo', 'services'));
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
    }
}
