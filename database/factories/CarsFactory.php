<?php

use Faker\Generator as Faker;


$factory->define(App\Car::class, function (Faker $faker) {
    return [

        'Make' => $faker->randomElement($array = ['FORD','TOYOTA','HONDA']),

        //'Model' => $faker->randomLetter,

        'Model' => str_random(3),

        'Year' => rand(1903,2018),
        //'Year' => mt_rand(1903,2018),
        //'Year' => rand(1903 , 2018),

        //'Year' => $faker->numberBetween($min =1903 , $max = 2018),

        //'Year' => $faker->

    ];
});
