<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1505949972ElencosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('elencos', function (Blueprint $table) {
            
if (!Schema::hasColumn('elencos', 'nomeelenco')) {
                $table->string('nomeelenco')->nullable();
                }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('elencos', function (Blueprint $table) {
            $table->dropColumn('nomeelenco');
            
        });

    }
}
