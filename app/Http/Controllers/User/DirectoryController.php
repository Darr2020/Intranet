<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;


class DirectoryController extends Controller{

    public function index(){

    	$titulo = "Directorio";

        $users = User::all()->sortByDesc('name');
        return view('users.directory', compact('users', 'titulo'));
    }
   

    public function show($id){
        
    }
}
