<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1506023878ElencofotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('elencofotos')) {
            Schema::create('elencofotos', function (Blueprint $table) {
                $table->increments('id');
                $table->string('foto')->nullable();
                $table->tinyInteger('ativo')->nullable()->default(1);
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elencofotos');
    }
}
