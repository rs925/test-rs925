<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement($array = array ('FORD','TOYOTA','HONDA'));
        'Model' => $faker->randomLetter;
        'Year' => $faker->numberBetween($min =1903 , $max = 2018);

    ];
});
