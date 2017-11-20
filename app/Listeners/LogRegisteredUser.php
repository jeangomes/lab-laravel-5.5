<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use App\Notifications\UserCreated;

class LogRegisteredUser {

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
    public function handle(Registered $event) {
        $event->user->notify(
                new UserCreated("Novo cadastro: " . $event->user->name . ', Id: ' . $event->user->id)
        );
    }

}
