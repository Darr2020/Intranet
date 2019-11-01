<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Service\ServiceStoreRequest;
use App\Http\Requests\Service\ServiceUpdateRequest;
use App\Service;
use App\User;


class ServiceController extends Controller{
    
    public function index(){
        $titulo = 'servicios';
        $services = Service::orderBy('id', 'DESC')->paginate(7);
        return view('admin.services.index', compact('titulo', 'services'));
    }
   
    public function create(){
        $titulo = 'Agregar servicio';

        return view('admin.services.create', compact('titulo'));
    }

    public function store(ServiceStoreRequest $request){        
        $service = new Service([
            'user_id'     => $request->get('user_id'),
            'name'        => $request->get('name'),
            'route'     => $request->get('route'),
            'description' => $request->get('description'),
            'state'       => $request->get('state')
        ]);
        $service->save();

        alert()->success('El servicio ha sido agregado correctamente',
            '' . auth()->user()->name)->autoclose(4000);

        return redirect()->route('services.index', $service->id);
    }

    public function edit($id){
        $titulo = 'Editar servicio';
        $service = Service::find($id);

        return view('admin.services.edit', compact('titulo', 'service'));
    }

    public function update(ServiceUpdateRequest $request, $id){
        $service = Service::find($id);
        $service->update([
            'user_id'     => $request->get('user_id'),
            'name'        => $request->get('name'),
            'route'     => $request->get('route'),
            'description' => $request->get('description'),
            'state'       => $request->get('state')
        ]);
        $service->save();

        alert()->success('El servicio ha sido editado correctamente', '' . auth()->user()->name)->autoclose(4000);

        return redirect()->route('services.index', $service->id);
    }
}
