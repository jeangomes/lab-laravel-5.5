<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Observers;

use App\Purchase;
use App\Notifications\UserCreated;

/**
 * Description of PurchaseObserver
 *
 * @author jean
 */
class PurchaseObserver {

    /**
     * Listen to the Purchase created event.
     *
     * @param  \App\User  $purchase
     * @return void
     */
    public function created(Purchase $purchase) {
        $purchase->notify(
                new UserCreated("Nova encomenda: " . $purchase->id)
        );
    }

    public function deleting(Purchase $purchase) {
        $purchase->notify(
                new UserCreated("Encomenda deletada: " . $purchase->id)
        );
    }

    public function updated(Purchase $purchase) {
        $purchase->notify(
                new UserCreated("Encomenda alterada: " . $purchase->id)
        );
    }

}
