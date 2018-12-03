<?php

namespace App\Http\Controllers;

use App\Event;
use App\EventUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use App\Notifications\UserCreated;

class EventUserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('membro.event.entrar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Event $event
     * @return \Illuminate\Http\Response
     */
    public function create(Event $event)
    {
        $participation = EventUser::where([
            ['user_id', '=', Auth::id()],
            ['event_id', '=', $event->id]
        ])->limit(1)->get();
        return view('membro.event.entrar')
            ->with(compact('participation', 'event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $input = $request->only('participar', 'event_id');

            $event = Event::find($input['event_id']);

            $participation = new EventUser([
                'user_id' => Auth::id(),
                'event_id' => $input['event_id']
            ]);

            if ((int)$input['participar'] === 1 && $participation->save()) {
                $notify = 'Nova inscrição no evento: ' . $event->title .PHP_EOL.'Nome: ' . Auth::user()->name;
                Notification::send(null, new UserCreated($notify));

                return redirect()->route('subscribe',['id'=>$input['event_id']])
                    ->with([
                        'aviso' => 'Participação enviada com sucesso.',
                        'type' => 'success'
                    ]);
            }

        } catch (Exception $ex) {

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = DB::table('event_user')
            ->where([
                ['user_id', '=', $id],
                ['event_id', '=', '9'],
            ])->delete();
        if ($result) {
            Notification::send(null, new UserCreated('Saiu do amigo oculto: ' . Auth::id()));
            return redirect()->route('amigo-oculto.index')
                ->with([
                    'aviso' => 'Participação removida com sucesso.',
                    'type' => 'danger'
                ]);
        }
        return redirect()->route('amigo-oculto.index')
            ->with([
                'aviso' => 'Você não estava participando.',
                'type' => 'warning'
            ]);
    }

}
