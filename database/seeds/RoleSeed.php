<?php

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'Administrador',],
            ['id' => 2, 'title' => 'Ranieri',],
            ['id' => 3, 'title' => 'Operador',],
            ['id' => 4, 'title' => 'Elenco',],
            ['id' => 5, 'title' => 'Produtor',],

        ];

        foreach ($items as $item) {
            \App\Role::create($item);
        }
    }
}
