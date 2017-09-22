<?php

$factory->define(App\ElencoVideo::class, function (Faker\Generator $faker) {
    return [
        "elenco_id" => factory('App\User')->create(),
        "urlvideo" => $faker->name,
        "ativo" => 1,
    ];
});
