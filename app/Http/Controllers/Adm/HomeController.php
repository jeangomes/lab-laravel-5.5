<?php

namespace App\Http\Controllers\Adm;

use App\Filters\EventFilters;
use App\Repositories\EventRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends AdmController {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth', ['except' => ['welcome']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, EventRepository $eventRepository, EventFilters $eventFilters) {
//        activity()
//                ->withProperties(['ip' => $request->ip(), 'ua' => $request->header('User-Agent')])
//                ->log('Café com pão');
        $events = $eventRepository->getEvents($eventFilters);
        return view('adm.index')->with(compact('events'));
    }

}
