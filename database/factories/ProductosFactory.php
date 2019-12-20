<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use Faker\Generator as Faker;

$factory->define(App\Producto::class, function (Faker $faker) {
    return [
        "nombre" => $faker->sentence(1), 
        "descripcion" => $faker->sentence(1), 
        "detalle" => $faker->sentence(1), 
        "precio" => $faker->numberBetween(1,100), 
    ];
});
