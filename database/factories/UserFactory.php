<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
        "email" => $faker->safeEmail,
        "password" => str_random(10),
        "remember_token" => $faker->name,
        "nomeartistico" => $faker->name,
        "datanascimento" => $faker->date("d-m-Y", $max = 'now'),
        "sexo" => collect(["Feminino",])->random(),
        "endcidade" => $faker->name,
        "enduf" => $faker->name,
        "cep" => $faker->name,
        "endrua" => $faker->name,
        "endnumero" => $faker->name,
        "endcomplemento" => $faker->name,
        "celular" => $faker->name,
        "celular2" => $faker->name,
        "telefone1" => $faker->name,
        "telefone2" => $faker->name,
        "facebook" => $faker->name,
        "instagram" => $faker->name,
        "apresentacao" => $faker->name,
        "peso" => $faker->randomFloat(2, 1, 100),
        "altura" => $faker->randomFloat(2, 1, 100),
        "calcado" => $faker->randomFloat(2, 1, 100),
        "manequim" => $faker->randomFloat(2, 1, 100),
        "camisa" => $faker->randomFloat(2, 1, 100),
        "terno" => $faker->randomFloat(2, 1, 100),
        "busto" => $faker->randomFloat(2, 1, 100),
        "cintura" => $faker->randomFloat(2, 1, 100),
        "quadril" => $faker->randomFloat(2, 1, 100),
        "pele" => collect(["Clara","Outra Pele",])->random(),
        "cabelocor" => collect(["Escuro","Outros",])->random(),
        "cabelotipo" => collect(["Liso","Cacheado","Teste",])->random(),
        "olhos" => collect(["Médio",])->random(),
        "rg" => $faker->name,
        "cpf" => $faker->name,
        "nacionalidade" => $faker->name,
        "escolaridade" => collect(["Médio",])->random(),
        "escolacurso" => $faker->name,
        "estadocivil" => collect(["Médio",])->random(),
        "profissao" => $faker->name,
        "rgufemissor" => $faker->name,
        "rgorgaoemissor" => $faker->name,
        "exclusividade" => 0,
        "orgaoprofissional" => $faker->name,
        "registroprofissional" => $faker->name,
    ];
});
