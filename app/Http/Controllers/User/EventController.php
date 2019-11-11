<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;

class EventController extends Controller{

    public function __construct(){
		$this->middleware('auth');
	}

	public function index(){
        $titulo = "Eventos";
       
        $events = Event::all()->where('state', 'PUBLISHED');
        $event  = [];

        foreach ($events as $row){
            $enddate = $row->date_end."24:00:00";
            $event[] = \Calendar::event(
                $row->title,
                false,
                new \DateTime($row->date_start),
                new \DateTime($row->date_end),
                $row->id,
                [ 'color' => $row->color, ]
            );
        }
        $calendar = \Calendar::addEvents($event);
<<<<<<< HEAD
        return view('users.events', compact('events', 'calendar', 'state', 'titulo'));
=======
        return view('users.events', compact('events', 'calendar', 'titulo'));
>>>>>>> 379ec1d7e9a7a50502552738e92d1d8c2e927150
    }
}
