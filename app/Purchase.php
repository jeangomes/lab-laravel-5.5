<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model {

    use Notifiable;
    use LogsActivity;

    protected $fillable = [
        'user_id', 'amount',
    ];

    public function products() {
        return $this->belongsToMany('App\Product', 'product_purchase')
                        ->withPivot(['qtd', 'total_price']);
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

}
