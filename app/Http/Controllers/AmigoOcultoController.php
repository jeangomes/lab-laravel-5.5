<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AmigoOcultoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
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
        try {
            $input = $request->only('participar', 'dica', 'event_id', 'participation_id');
            if ((int) $input['participar'] === 1) {
                if (is_null($input['participation_id'])) {
                    $id_participacao = DB::table('event_user')->insertGetId([
                        'user_id' => Auth::id(),
                        'event_id' => $input['event_id'],
                    ]);
                    $this->storeTips($id_participacao, $input);
                } else {
                    $this->storeTips($input['participation_id'], $input);
                }
            }
            return redirect()->route('amigo-oculto.index')
                            ->with('aviso', 'Participação enviada com sucesso!');
        } catch (Exception $ex) {
            
        }
    }

    private function storeTips($id_participacao, $input) {
        DB::table('event_user_tips')
                ->where('event_user_id', '=', $id_participacao)->delete();
        foreach ($input['dica'] as $key => $value) {
            if (!is_null($value)) {
                DB::table('event_user_tips')->insert([
                    'event_user_id' => $id_participacao,
                    'gift_tip' => $value,
                ]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
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
        DB::table('event_user')
                ->where([
                    ['user_id', '=', $id],
                    ['event_id', '=', '9'],
                ])->delete();
        return view('amigo-oculto.entrar');
        return redirect()->route('amigo-oculto.index')
                        ->with('aviso', 'Participação removida com sucesso!');
    }

}
