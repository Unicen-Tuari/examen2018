<?php

use Faker\Generator as Faker;


$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'precio' => $faker->randomDigitNotNull,
        'puntaje' => $faker->numberBetween($min = 1, $max = 25),
    ];
});
