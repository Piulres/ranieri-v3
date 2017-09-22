<?php

$factory->define(App\Selecoesv2::class, function (Faker\Generator $faker) {
    return [
        "selecaonome" => $faker->name,
        "datafimselecao" => $faker->date("d-m-Y", $max = 'now'),
        "descricao" => $faker->name,
        "produtoraelenco_id" => factory('App\User')->create(),
    ];
});
