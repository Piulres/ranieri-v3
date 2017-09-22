<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(ContentPageSeed::class);
        $this->call(PermissionSeed::class);
        $this->call(ProdutoraSeed::class);
        $this->call(RoleSeed::class);
        $this->call(TaskStatusSeed::class);
        $this->call(UserSeed::class);
        $this->call(ElencoSeedPivot::class);
        $this->call(RoleSeedPivot::class);
        $this->call(UserSeedPivot::class);

    }
}
