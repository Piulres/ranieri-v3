<?php

$factory->define(App\Elenco::class, function (Faker\Generator $faker) {
    return [
        "nome" => $faker->name,
        "nomeelenco" => $faker->name,
    ];
});
