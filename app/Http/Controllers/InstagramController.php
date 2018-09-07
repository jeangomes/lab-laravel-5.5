<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Instagram\Instagram;

class InstagramController extends Controller
{

    public function index()
    {

        $instagram = new Instagram(env('INSTA_ID', 'YOUR-ID-INSTA'));
        // Fetch recent user media items.
        //$instagram->media();
        $instagrams = $instagram->media();
        return view('site.fotos')->with(compact('instagrams'));
    }

}
