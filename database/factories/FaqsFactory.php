<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Faq;
use Faker\Generator as Faker;

$factory->define(App\Faq::class, function (Faker $faker) {
    return [
        "pregunta" => $faker->sentence(5), 
        "respuesta" => $faker->sentence(10), 
    ];
});
