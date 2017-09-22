<?php

$factory->define(App\Elencofoto::class, function (Faker\Generator $faker) {
    return [
        "elenco_id" => factory('App\User')->create(),
        "ativo" => 1,
    ];
});
