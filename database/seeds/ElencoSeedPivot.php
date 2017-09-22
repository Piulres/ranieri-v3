<?php

use Illuminate\Database\Seeder;

class ElencoSeedPivot extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            1 => [
                'role' => [2],
            ],

        ];

        foreach ($items as $id => $item) {
            $elenco = \App\Elenco::find($id);

            foreach ($item as $key => $ids) {
                $elenco->{$key}()->sync($ids);
            }
        }
    }
}
