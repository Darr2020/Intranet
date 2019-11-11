<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Http\Requests\EventStoreRequest;
use App\Http\Requests\EventUpdateRequest;
use App\Event;
=======
use App\Http\Requests\Event\EventStoreRequest;
use App\Http\Requests\Event\EventUpdateRequest;
use Illuminate\Support\Facades\DB;
use App\Event;
use App\Trace;
use App\Notification;

>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150

class EventController extends Controller{

    public function __construct(){        
        $this->middleware('auth');
    }
    
    public function index(){
        $titulo = "Eventos";
        $events = Event::orderBy('id', 'DESC')
            ->where('user_id', auth()->id())
            ->paginate();
 
        return view('admin.events.index', compact('events', 'titulo'));
    }

   
    public function create(){
        
        $titulo = "Crear evento";

        return view('admin.events.create', compact('titulo'));
    }
 
    public function store(EventStoreRequest $request){

<<<<<<< HEAD
        $event = Event::create($request->all());

            alert()->success('El evento ha sido creado correctamente', '' . auth()->user()->name)->persistent('Cerrar');

       
        return redirect()->route('events.index', $event->id);
=======
        if ($request['date_start'] >= $request['date_end']) {
            alert()->error('La fecha de inicio debe ser menor a la de finalización', '' . auth()->user()->name)->persistent('Cerrar');
            return back();
        } else {
            DB::beginTransaction();
            try {
               $event = Event::create([
                    'user_id'     => $request['user_id'],
                    'title'       => $request['title'],            
                    'slug'        => $request['slug'],
                    'color'       => $request['color'],
                    'date_start'  => $request['date_start'],
                    'date_end'    => $request['date_end'],
                    'description' => $request['description'],
                    'state'       => $request['state']
                ]);
                $notification = Notification::create([
                    'who_id' => $request['user_id'],
                    'type' => Trace::EVENT,
                    'title' => 'Servicio',
                    'description' => Notification::DESCRIPTION_E
                ]);

                $trace = Trace::create([
                    'user_id' => $request['user_id'],
                    'action' => Trace::EVENT,
                    'type_action' => 'CREATE',
                    'description' =>'Ha creado un evento institucional'
                ]);                
                DB::commit();
            } catch (\Exception $e) {
                DB::rollback();                     
                throw $e;
            }
            alert()->success('El evento ha sido creado correctamente', '' . auth()->user()->name)->persistent('Cerrar');
            return redirect()->route('events.index', $event->id);
        }              
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
    }

    public function edit($id){
        $titulo = "Editar";
        $event = Event::find($id);
        $this->authorize('pass', $event);       

        return view('admin.events.edit', compact('event', 'titulo'));
    }

<<<<<<< HEAD
   public function update(EventUpdateRequest $request, $id){
        $event = Event::find($id);
      
        $event->fill($request->all())->save();

        alert()->success('El evento ha sido editado correctamente', '' . auth()->user()->name)->persistent('Cerrar');

        return redirect()->route('events.index', $event->id);
=======
    public function update(EventUpdateRequest $request, $id){

        $event = Event::find($id);
        $event->fill($request->all())->save();
        if ($request->get('date_start') >= $request->get('date_end')) {
            alert()->error('La fecha de inicio debe ser menor a la de finalización', '' . auth()->user()->name)->persistent('Cerrar');
            return back();
        } else {
            DB::beginTransaction();
            try {         

                $trace = Trace::create([
                    'user_id' => $request['user_id'],
                    'action' => Trace::EVENT,
                    'type_action' => 'UPDATE',
                    'description' =>'Ha creado un evento institucional'
                ]);                
                DB::commit();
            } catch (\Exception $e) {
                DB::rollback();                     
                throw $e;
            }
            alert()->success('El evento ha sido editado correctamente', '' . auth()->user()->name)->persistent('Cerrar');
            return redirect()->route('events.index', $event->id);
        }        
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
    }

    public function destroy($id){
        $event = Event::find($id);
        $this->authorize('pass', $event);
        $event->delete();
        alert()->info('El evento ha sido eliminado correctamente', '' . auth()->user()->name)->persistent('Cerrar');

        return back();
    }
}
