<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59c444db6466aRelationshipsToSelecaoelencoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('selecaoelencos', function(Blueprint $table) {
            if (!Schema::hasColumn('selecaoelencos', 'selecaoelencov2_id')) {
                $table->integer('selecaoelencov2_id')->unsigned()->nullable();
                $table->foreign('selecaoelencov2_id', '75834_59c444da79280')->references('id')->on('selecoesv2s')->onDelete('cascade');
                }
                if (!Schema::hasColumn('selecaoelencos', 'atorselecao_id')) {
                $table->integer('atorselecao_id')->unsigned()->nullable();
                $table->foreign('atorselecao_id', '75834_59c444da85471')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('selecaoelencos', function(Blueprint $table) {
            
        });
    }
}
