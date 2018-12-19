<?php

use Faker\Generator as Faker;
use App\Persona;

$factory->define(App\Persona::class, function (Faker $faker) {
    return [
        'nombre' 	=> $faker->firstName,
        'apellido'  => $faker->LastName,
        'email' 	=> $faker->safeEmail,
        'dni' 		=> $faker->unique()->randomNumber(9)
    ];
});
