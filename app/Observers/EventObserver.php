<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Observers;

use App\Event;
use App\Notifications\UserCreated;

/**
 * Description of EventObserver
 *
 * @author jean
 */
class EventObserver {

    protected function makeAd($event){
        return "💀💀💀💀💀💀💀💀
 
$event->title

📆 DATA: $event->start_date
🚌 TRANSPORTE
💰VALOR: R$ $event->price

➡ IDA: $event->start_date Saída RJ: 04 h 
⬅ RETORNO: $event->final_date previsto às 17:00
🚩 LOCAL DE ENCONTRO: $event->meeting_point

⛰DESCRIÇÃO DA ATIVIDADE/TRILHA:

$event->description

DIFICULDADE: MODERADA/SUPERIOR - 11KM
Duração média: 7 horas

🏦DADOS BANCÁRIOS 🏦

SOLICITAR ADMIN NO PRIVADO.

✅ Sua entrada no grupo do evento (Wapp) e a garantia de sua participação está sujeita à aprovação dos administradores e ao pagamento dos valores mencionados na descrição. 

💵  VALOR TOTAL:  💵

Transporte: $event->price

DATA LIMITE DE PAGAMENTO: ".$event->payment_deadline->format('d/m/Y');
    }

    /**
     * Listen to the Event created event.
     *
     * @param  \App\User  $event
     * @return void
     */
    public function created(Event $event) {
        $chamada = $this->makeAd($event);
        dd($chamada);
        $event->notify(
                new UserCreated("Novo evento cadastrado: " . $event->id)
        );
        $event->notify(
            new UserCreated($chamada)
        );
    }

    public function deleting(Event $event) {
        $event->notify(
                new UserCreated("Evento deletado: " . $event->id)
        );
    }

    public function updated(Event $event) {
        $event->notify(
                new UserCreated("Evento alterado: " . $event->id)
        );
    }

}
