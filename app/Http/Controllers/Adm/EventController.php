<?php

namespace App\Http\Controllers\Adm;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends AdmController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Event::with('customers')->orderBy('start_date')->paginate(10);
        return view('adm.events.index')->with(compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $event = new Event();
        $event->title = $request->title;
        $event->vacancy = $request->vacancy;
        $event->user_id = 1;
        $event->price = $request->price;
        $event->start_date = $request->start_date;
        $event->final_date = $request->final_date;
        $event->description = $request->description;
        $event->payment_deadline = $request->payment_deadline;
        $event->meeting_point = $request->meeting_point;
        $event->meeting_point_map = $request->meeting_point;
        $event->equipment = $request->equipment;
        $event->food = $request->food;
        $event->what_is_included = $request->what_is_included;
        $event->what_is_not_included = $request->what_is_not_included;

        $event->save();
        //dd($event);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $evento)
    {

        $evento = Event::with('customers')->find($evento->id);
        return view('adm.events.show')->with(compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Event $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
