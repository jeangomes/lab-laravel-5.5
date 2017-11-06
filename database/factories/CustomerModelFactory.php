<?php

$factory->define(App\Customer::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'city' => $faker->city,
        //'state' => $faker->stateAbbr,
        'birth_date' => $faker->date(),
        'special_customer' => $faker->boolean(),
    ];
});
