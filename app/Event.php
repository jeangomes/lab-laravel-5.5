<?php

namespace App;

use App\Filters\Filterable;
use DateTime;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Model;

class Event extends Model implements \MaddHatter\LaravelFullcalendar\Event
{
    use Filterable;
    use Notifiable;
    use LogsActivity;

    protected $dates = [
        'start_date',
        'final_date',
        'payment_deadline'
    ];

    //protected $with = ['customers'];

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
        return $this->vacancy - $this->customers->count();
    }

    public function getEventOptions()
    {
        return [
            'color' => $this->background_color,
            //etc
        ];
    }

    public function getId() {
        return $this->id;
    }

    /**
     * Get the event's title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Is it an all day event?
     *
     * @return bool
     */
    public function isAllDay()
    {
        return true;
    }

    /**
     * Get the start time
     *
     * @return DateTime
     */
    public function getStart()
    {
        return $this->start_date;
    }

    /**
     * Get the end time
     *
     * @return DateTime
     */
    public function getEnd()
    {
        return $this->final_date;
    }
}
