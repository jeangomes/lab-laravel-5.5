<?php

namespace App;

use App\Filters\Filterable;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use Filterable;
    use Notifiable;
    use LogsActivity;

    protected $dates = [
        'start_date',
        'final_date',
        'payment_deadline'
    ];

    //
    public function customers()
    {
        return $this->belongsToMany('App\User', 'event_user')
            ->withPivot(['id as participation_id', 'subscribe_date'])
            ->select(array('users.id', 'name'))
            ->orderBy('subscribe_date')->using('App\EventUser');
    }

    public function getHasVacancyAttribute()
    {
        return $this->vacancy - $this->customers()->count();
    }

}
