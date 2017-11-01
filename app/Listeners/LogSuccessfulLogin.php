<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class LogSuccessfulLogin {

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request) {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event) {
        activity()
                ->withProperties(['ip' => $this->request->ip(), 'ua' => $this->request->header('User-Agent')])
                ->log('Login efetuado'); //6020   vistorias prob parcelamento
    }

}
