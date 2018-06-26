<?php

use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(App\Event::class, function (Faker $faker) {
    $startDate = Carbon::createFromTimeStamp($faker->dateTimeBetween('-3 year', '+1 year')->getTimestamp());
    $endDate = Carbon::createFromFormat('Y-m-d H:i:s', $startDate)->addDays(3);
    $payment_deadline = Carbon::createFromFormat('Y-m-d H:i:s', $startDate)->subDay(7);

    return [
        'title' => $faker->randomElement([
            'Serra Fina',
            'Petropolis x Teresopolis',
            'Marins x Itaguare',
            'Juatinga',
            'Baependi x Aiuruoca',
            'Pico da Caledonia',
            'Torres de Bonsucesso',
            'Complexo do Baú',
            'Serrinha do Alambari',
            'Capitolio',
            'Pedra Chata',
            'Dois Bicos'
                ]
        ),
        'vacancy' => $faker->numberBetween(10, 15),
        'price' => $faker->randomFloat(2, 10, 400),
        'start_date' => $startDate,
        'final_date' => $endDate,
        'payment_deadline'=>$payment_deadline,
        'description' => $faker->sentence(200),
        'user_id' => $faker->numberBetween(1, 10),
        'meeting_point'=>'Posto Shell',
        'equipment'=>'Mochila',
        'food'=>'Água',
        'what_is_included'=>'Transporte ida e volta',
        'what_is_not_included'=>'Alimentação',
    ];
});
