<?php

use Faker\Generator as Faker;

$factory->define(\App\Pago::class, function (Faker $faker) {
    return [
         'codigo' 	=> $faker->numberBetween(1000,99999),
         'url'  => $faker->url,
    ];
});
