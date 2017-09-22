<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$1/oVFAxurGZ7EuvyMM5C7.01Bm8ALdm71DNnrI4X91h1ntYIq155C', 'remember_token' => '', 'nomeartistico' => null, 'datanascimento' => '', 'sexo' => null, 'endcidade' => null, 'enduf' => null, 'cep' => null, 'endrua' => null, 'endnumero' => null, 'endcomplemento' => null, 'celular' => null, 'celular2' => null, 'telefone1' => null, 'telefone2' => null, 'facebook' => null, 'instagram' => null, 'fotoprincipal' => null, 'apresentacao' => null, 'curriculum' => null, 'peso' => null, 'altura' => null, 'calcado' => null, 'manequim' => null, 'camisa' => null, 'terno' => null, 'busto' => null, 'cintura' => null, 'quadril' => null, 'pele' => null, 'cabelocor' => null, 'cabelotipo' => null, 'olhos' => null, 'rg' => null, 'cpf' => null, 'nacionalidade' => null, 'escolaridade' => null, 'escolacurso' => null, 'estadocivil' => null, 'profissao' => null, 'rgufemissor' => null, 'rgorgaoemissor' => null, 'exclusividade' => 0, 'orgaoprofissional' => null, 'registroprofissional' => null,],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
