<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1506034905SelecaoelencosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('selecaoelencos')) {
            Schema::create('selecaoelencos', function (Blueprint $table) {
                $table->increments('id');
                $table->string('statusator')->nullable();
                $table->text('observacaoselecao')->nullable();
                
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
        Schema::dropIfExists('selecaoelencos');
    }
}
