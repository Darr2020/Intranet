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
        return view('users.events', compact('events', 'calendar', 'titulo'));
    }
}
