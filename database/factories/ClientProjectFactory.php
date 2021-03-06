<?php

$factory->define(App\ClientProject::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
        "client_id" => factory('App\Client')->create(),
        "produtora_id" => factory('App\Produtora')->create(),
        "description" => $faker->name,
        "date" => $faker->date("d-m-Y", $max = 'now'),
        "budget" => $faker->name,
        "project_status_id" => factory('App\ClientProjectStatus')->create(),
    ];
});
