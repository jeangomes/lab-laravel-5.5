<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdmController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
}
