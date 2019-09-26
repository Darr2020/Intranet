<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use app\User;

class RoleController extends Controller{
   
    public function index(){
        $titulo = "Roles";
        $roles = Role::paginate();

        return view('admin.roles.index', compact('roles', 'titulo'));
    }

    public function listar(){
        $users = User::orderBy('name','ASC')->get();
        return view('admin.roles.listar', compact('users'));
    }
    
    public function create(){
        $titulo = "Crear";
        $permissions = Permission::get();

        return view('admin.roles.create', compact('permissions', 'titulo'));
    }

    public function store(Request $request){

        $role = Role::create($request->all());

        $role->permissions()->sync($request->get('permissions'));

        alert()->success('El rol ha sido creado correctamente', '' . auth()->user()->name)->persistent('Cerrar');

        return redirect()->route('roles.index', $role->id);
    }

    public function edit($id){
         $titulo = "Roles";
        $role = Role::find($id);

        $permissions = Permission::get();

        return view('admin.roles.edit', compact('role', 'permissions', 'titulo'));
    }

    public function update(Request $request, $id){
        $role = Role::find($id);
        $role->update($request->all());

        $role->permissions()->sync($request->get('permissions'));

        alert()->info('El rol ha sido editado correctamente', '' . auth()->user()->name)->persistent('Cerrar');


        return redirect()->route('roles.index', $role->id);
    }

    public function destroy($id){
        $role = Role::find($id)->delete();

        alert()->info('El rol ha sido eliminado correctamente', '' . auth()->user()->name)->persistent('Cerrar');

        return back();
    }
}
