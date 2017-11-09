<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {        

    return [
        'name' => 'Queijo temperado com pimenta e oregano'.$faker->numerify(),
        'price' => $faker->randomFloat(2, 8, 50),
    ];
});
