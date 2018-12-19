<?php

use Faker\Generator as Faker;

$factory->define(App\Curso::class, function (Faker $faker) {
  //Localize en Español	
	//  $faker = new Faker\Generator();
   //   $faker->addProvider(new Faker\Provider\es_ES\Person($faker));
   
    return [
        'nombre' => $faker->text
    ];
});
