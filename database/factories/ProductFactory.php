<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {        

    return [
        'name' => $faker->colorName,
        'price' => $faker->randomFloat(2, 8, 50),
    ];
});
