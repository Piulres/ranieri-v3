<?php

$factory->define(App\Selecaoelenco::class, function (Faker\Generator $faker) {
    return [
        "selecaoelencov2_id" => factory('App\Selecoesv2')->create(),
        "atorselecao_id" => factory('App\User')->create(),
        "statusator" => collect(["5 - Ok",])->random(),
        "observacaoselecao" => $faker->name,
    ];
});
