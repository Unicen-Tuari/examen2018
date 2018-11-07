<?php

use Faker\Generator as Faker;


$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'precio' => $faker->randomDigitNotNull,
    ];
});
