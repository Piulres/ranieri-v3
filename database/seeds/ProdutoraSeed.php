<?php

use Illuminate\Database\Seeder;

class ProdutoraSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'nome' => 'Produtora 1',],

        ];

        foreach ($items as $item) {
            \App\Produtora::create($item);
        }
    }
}
