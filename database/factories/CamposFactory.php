<?php

use Faker\Generator as Fakers;


$factory->define(\App\Campo::class, function (Fakers $faker) {
	 
	//Localize en Español	
	  $faker = new Faker\Generator();
      $faker->addProvider(new Faker\Provider\es_ES\Person($faker));
   
    return [
        'carrera' => $faker->name
    ];
});



