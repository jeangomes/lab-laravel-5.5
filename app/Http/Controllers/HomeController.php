<?php

namespace App\Http\Controllers;

use App\Event;
use Telegram\Bot\Laravel\Facades\Telegram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Calendar;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['welcome', 'index', 'botSkull', 'quemSomos']]);
    }

    public function botSkull()
    {
        $response = Telegram::getMe();

        $botId = $response->getId();
        $firstName = $response->getFirstName();
        $username = $response->getUsername();

        dd($botId,$username,$firstName);

        $update = Telegram::commandsHandler(true);

        dd('oi', $update);

        //$event = new Event();
        //$events = $event->pluck('title')->toArray();
        // array_chunk($events, 2)

    }

    public function index(Request $request)
    {
        $events = [];

        $events[] = Calendar::event(
            'Event One', //event title
            false, //full day event?
            '2018-02-11', //start time (you can also use Carbon instead of DateTime)
            '2018-02-12', //end time (you can also use Carbon instead of DateTime)
            0 //optionally, you can specify an event ID
        );

        $events[] = Calendar::event(
            "Valentine's Day", //event title
            true, //full day event?
            new \DateTime('2018-10-15'), //start time (you can also use Carbon instead of DateTime)
            new \DateTime('2018-10-20'), //end time (you can also use Carbon instead of DateTime)
            'stringEventId' //optionally, you can specify an event ID
        );

        $eloquentEvent = Event::first(); //EventModel implements MaddHatter\LaravelFullcalendar\Event
//dd($events,$eloquentEvent);
        $calendar = Calendar::addEvents($events) //add an array with addEvents
        ->addEvent($eloquentEvent, [ //set custom color fo this event
            'color' => '#000',
        ])->setOptions([ //set fullcalendar options
            'firstDay' => 0,
            'locale'=> 'pt-br','themeSystem'=> 'bootstrap4',
        ]);

        //return view('calendar', compact('calendar'));
        return view('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(Request $request)
    {
//        activity()
//                ->withProperties(['ip' => $request->ip(), 'ua' => $request->header('User-Agent')])
//                ->log('Café com pão');
        $user = Auth::user();
//        var_dump($user->id);
        return view('home');
    }

    public function quemSomos(Request $request)
    {
        return view('site.quem-somos');
    }

}
