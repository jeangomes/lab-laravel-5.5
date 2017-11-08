<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

    //
    public function customers() {
        return $this->belongsToMany('App\User', 'event_user');
    }

}
