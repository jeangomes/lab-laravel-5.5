<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model {

    //
    public function customers() {
        return $this->belongsToMany('App\Customer', 'customer_evento');
    }

}
