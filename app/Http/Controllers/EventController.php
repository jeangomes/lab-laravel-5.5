<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EventController extends Controller {
    
    public function __construct() {
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        if(Auth::check()){
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
        }
        return view('site.agenda');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $participation = $users = DB::table('event_user')->where([
            ['user_id', '=', Auth::id()],
            ['event_id', '=', '9'],
        ])->limit(1)->get();
        $participation_id = isset($participation[0]) ? $participation[0]->id : null;
        return view('amigo-oculto.entrar')->with(compact('participation_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $evento = Event::findOrFail($id);
        if ($evento->delete()) {
            return redirect()->route('adm.evento.index')->with('aviso', 'Evento deletado!');
        }
    }

}
