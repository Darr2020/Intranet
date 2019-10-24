<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Caffeinated\Shinobi\Models\Role;
use App\User;
use Alert;
use Carbon\Carbon;

class UserController extends Controller{
    
    public function index(Request $request){
  
        $titulo = "Directorio";
        $name = $request->get('name');  

        $users = User::orderBy('name','ASC')
            ->name($name)
            ->paginate();
     
        return view('users.directory', compact('users', 'titulo'));
    }
   

    public function show($slug){

        $titulo = "Perfil";
        $user = User::where('slug', $slug)->first();

        return view('users.profile', compact('user', 'titulo'));
    }

    
    public function edit($id){
        $titulo = "Editar";        
        $user = User::find($id);
        $roles = Role::get();

        return view('admin.directory.edit', compact('user', 'roles', 'titulo'));
    }
   
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->update($request->all());

        $user->roles()->sync($request->get('roles'));

        alert()->success('Se le ha agregado el rol a ' .$user->name. ' ' .$user->last_name ,
         '' . auth()->user()->name)->autoclose(4000);

        return redirect()->route('users.edit', $user->id);
    }
}
