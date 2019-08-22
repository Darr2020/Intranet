<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

class RoleController extends Controller{
   
    public function index(){
        $titulo = "Roles";
        $roles = Role::paginate();

        return view('admin.roles.index', compact('roles', 'titulo'));
    }
    
    public function create(){
        $titulo = "Crear";
        $permissions = Permission::get();

        return view('admin.roles.create', compact('permissions', 'titulo'));
    }

    public function store(Request $request){

        $role = Role::create($request->all());

        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.index', $role->id)
            ->with('info', 'Rol creado con éxito');
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

        return redirect()->route('roles.index', $role->id)
            ->with('info', 'Rol guardado con éxito');
    }

    public function destroy($id){
        $role = Role::find($id)->delete();

        return back()->with('info', 'Rol eliminado correctamente');
    }
}
