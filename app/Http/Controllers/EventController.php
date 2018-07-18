<?php

namespace App\Http\Controllers;

use App\Event;
use App\Filters\EventFilters;
use App\Repositories\EventRepository;

class EventController extends Controller {
    
    public function __construct() {
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param EventRepository $eventRepository
     * @return \Illuminate\Http\Response
     */
    public function index(EventRepository $eventRepository, EventFilters $eventFilters) {
/*        if(Auth::check()){
            $eventot = Event::with('customers')->find(9);
            $ret = array_values($eventot->relationsToArray());

            $func = function($n) {
                $dicas = DB::table('event_user_tips')->select('gift_tip')
                    ->where('event_user_id', $n['participation_id'])->get();
                $n['dicas'] = $dicas;
                return $n;
            };

            $evento = array_map($func, $ret[0]);

            return view('membro.event.show')->with(compact('evento'));
        }*/
        $events = $eventRepository->getEvents($eventFilters);
        return view('site.agenda')->with(compact('events'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event) {
        return view('site.evento')->with(compact('event'));
    }

}
