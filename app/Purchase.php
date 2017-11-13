<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model {

    protected $fillable = [
        'user_id',
    ];

    public function products() {
        return $this->belongsToMany('App\Product', 'product_purchase')
                ->withPivot('qtd');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
