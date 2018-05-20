<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Model;

class Event extends Model {
    use Notifiable;
    use LogsActivity;
    //
    public function customers() {
        return $this->belongsToMany('App\User', 'event_user')
                ->withPivot(['id as participation_id','subscribe_date'])
                ->select(array('users.id','birth_date', 'name'))
                ->orderBy('subscribe_date');
    }

}
