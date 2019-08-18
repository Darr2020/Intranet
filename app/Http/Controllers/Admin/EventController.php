<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EventStoreRequest;
use App\Http\Requests\EventUpdateRequest;
use App\Event;

class EventController extends Controller{

    public function __construct(){        
        $this->middleware('auth');
    }
    
    public function index(){
        $titulo = "Eventos";
        $events = Event::orderBy('id', 'DESC')
            //Error provoxado aproposito -descomentar
            //->where('user_id', auth()->id())
            ->paginate();
 
        return view('admin.events.index', compact('events', 'titulo'));
    }

   
    public function create(){
        
        $titulo = "Crear evento";

        return view('admin.events.create', compact('titulo'));
    }
 
    public function store(EventStoreRequest $request){

        $event = Event::create($request->all());
       
        return redirect()->route('events.index', $event->id)
            ->with('info', 'Evento creado con éxito');
    }

    public function edit($id){
        $titulo = "Editar";
        $event = Event::find($id);
       

        return view('admin.events.edit', compact('event', 'titulo'));
    }

   public function update(EventUpdateRequest $request, $id){
        $event = Event::find($id);
      
        $event->fill($request->all())->save();

        return redirect()->route('events.index', $event->id)->with('info', 'Evento actualizado con éxito');
    }

    public function destroy($id){
        $event = Event::find($id);
       // $this->authorize('pass', $event);
        $event->delete();
        return back()->with('info', 'Evento eliminado correctamente');
    }
}
