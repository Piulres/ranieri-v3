<?php

$factory->define(App\Produtora::class, function (Faker\Generator $faker) {
    return [
        "nome" => $faker->name,
    ];
});
