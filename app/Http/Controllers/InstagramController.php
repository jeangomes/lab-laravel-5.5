<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Instagram\Instagram;

class InstagramController extends Controller
{

    public function index()
    {
// Create a new instagram instance.
        //$instagram = new Instagram('544314600.569b83a.b686f25c29384d3e80e36f40bce9db43'); jean
        $instagram = new Instagram(''); //caveiras

// Fetch recent user media items.
        //$instagram->media();

// Fetch user information.
        $instagrams = $instagram->media();
        return view('site.fotos')->with(compact('instagrams'));
    }

}
