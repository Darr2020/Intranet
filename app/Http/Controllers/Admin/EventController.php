<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Event\EventStoreRequest;
use App\Http\Requests\Event\EventUpdateRequest;
use Illuminate\Support\Facades\DB;
use App\Event;

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

        if ($request->get('date_start') >= $request->get('date_end')) {
            alert()->error('La fecha de inicio debe ser menor a la de finalización', '' . auth()->user()->name)->persistent('Cerrar');
            return back();
        } else {
            DB::beginTransaction();
            try {
               $event = Event::create([
                    'user_id'     => $request->get('user_id'),
                    'title'       => $request->get('title'),            
                    'slug'        => $request->get('slug'),
                    'color'       => $request->get('color'),
                    'date_start'  => $request->get('date_start'),
                    'date_end'    => $request->get('date_end'),
                    'description' => $request->get('description'),
                    'state'       => $request->get('state')
                ]);
                DB::commit();
            } catch (\Exception $e) {
                DB::rollback();
                
                throw $e;
            }
            alert()->success('El evento ha sido creado correctamente', '' . auth()->user()->name)->persistent('Cerrar');
            return redirect()->route('events.index', $event->id);
        }              
    }

    public function edit($id){
        $titulo = "Editar";
        $event = Event::find($id);
        $this->authorize('pass', $event);       

        return view('admin.events.edit', compact('event', 'titulo'));
    }

   public function update(EventUpdateRequest $request, $id){
        $event = Event::find($id);
      
        $event->fill($request->all())->save();

        alert()->success('El evento ha sido editado correctamente', '' . auth()->user()->name)->persistent('Cerrar');

        return redirect()->route('events.index', $event->id);
    }

    public function destroy($id){
        $event = Event::find($id);
        $this->authorize('pass', $event);
        $event->delete();
        alert()->info('El evento ha sido eliminado correctamente', '' . auth()->user()->name)->persistent('Cerrar');

        return back();
    }
}
