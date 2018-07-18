<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class EventUser extends Pivot
{
    protected $dates = [
        'subscribe_date'
    ];
}