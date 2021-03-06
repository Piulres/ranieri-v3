<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59c41a2412507RelationshipsToElencofotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('elencofotos', function(Blueprint $table) {
            if (!Schema::hasColumn('elencofotos', 'elenco_id')) {
                $table->integer('elenco_id')->unsigned()->nullable();
                $table->foreign('elenco_id', '75805_59c419c7581c1')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('elencofotos', function(Blueprint $table) {
            
        });
    }
}
