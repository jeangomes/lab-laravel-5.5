<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

    protected $fillable = ['name', 'birth_date', 'city', 'state', 'special_customer'];
    protected $casts = [
        'special_customer' => 'boolean',
        'birth_date' => 'date'
    ];

    public function eventos() {
        return $this->belongsToMany('App\Evento', 'customer_evento');
    }

}
