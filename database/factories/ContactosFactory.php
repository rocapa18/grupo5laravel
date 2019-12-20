<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contacto;
use Faker\Generator as Faker;

$factory->define(App\Contacto::class, function (Faker $faker) {
    return [
        "email" => $faker->email(1),
        "comentario" => $faker->sentence(1), 
    ];
});
