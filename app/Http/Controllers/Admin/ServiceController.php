<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Service\ServiceStoreRequest;
use App\Http\Requests\Service\ServiceUpdateRequest;
use App\Service;
use App\User;
use App\Trace;
use App\Notification;

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
        
        DB::beginTransaction();
        try {
            $service =  Service ::create([
                'user_id'     => $request['user_id'],
                'name'        => $request['name'],
                'route'     => $request['route'],
                'description' => $request['description'],
                'state'       => $request['state']
            ]);   
            
            $notification = Notification::create([
                'who_id' => $request['user_id'],
                'type' => Trace::SERVICE,
                'title' => 'Servicio',
                'description' => Notification::DESCRIPTION_S    
            ]);  

            $trace = Trace::create([
                'user_id' => $request['user_id'],
                'action' => Trace::SERVICE,
                'type_action'=> 'CREATE',
                'description'=>'Ha agreagado un servico[tucional'
            ]);                     
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();                     
            throw $e;
        }

        alert()->success('El servicio ha sido agregado correctamente', '' . auth()->user()->name)->autoclose(4000);
        return redirect()->route('services.index', $service->id);
    }

    public function edit($id){
        $titulo = 'Editar servicio';
        $service = Service::find($id);

        return view('admin.services.edit', compact('titulo', 'service'));
    }

    public function update(ServiceUpdateRequest $request, $id){
        $service = Service::find($id);
        
        DB::beginTransaction();
        try {
            $service->update([
                'user_id'     => $request['user_id'],
                'name'        => $request['name'],
                'route'     => $request['route'],
                'description' => $request['description'],
                'state'       => $request['state']
            ]);        

            $trace = Trace::create([
                'user_id' => $request['user_id'],
                'action' => Trace::SERVICE,
                'type_action'=> 'UPDATE',
                'description'=>'Ha actualizado un servicio institucional'
            ]);                 
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();                     
            throw $e;
        }

        alert()->success('El servicio ha sido editado correctamente', '' . auth()->user()->name)->autoclose(4000);
        return redirect()->route('services.index', $service->id);
    }
}
