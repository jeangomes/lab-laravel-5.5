<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class TrackingController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $title = 'Tracking';
        $results = Activity::with('causer')->orderBy('created_at', 'desc')->paginate(10);
        return view('adm.tracking', compact('title', 'results'));
    }

}