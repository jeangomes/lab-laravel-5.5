<?php

namespace App\Http\Controllers;

use App\Event;
use Telegram\Bot\Laravel\Facades\Telegram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        //dd($botId,$username,$firstName);

        $update = Telegram::commandsHandler(true);

        dd('oi', $update);

        //$event = new Event();
        //$events = $event->pluck('title')->toArray();
        // array_chunk($events, 2)

    }

    public function index(Request $request)
    {
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
