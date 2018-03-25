<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {

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
    public function index(Request $request) {
//        activity()
//                ->withProperties(['ip' => $request->ip(), 'ua' => $request->header('User-Agent')])
//                ->log('Café com pão');
        $user = Auth::user();
//        var_dump($user->id);
        return view('home');
    }

}
