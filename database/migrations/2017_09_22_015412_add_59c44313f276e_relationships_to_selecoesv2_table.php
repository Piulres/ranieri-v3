<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59c44313f276eRelationshipsToSelecoesv2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('selecoesv2s', function(Blueprint $table) {
            if (!Schema::hasColumn('selecoesv2s', 'produtoraelenco_id')) {
                $table->integer('produtoraelenco_id')->unsigned()->nullable();
                $table->foreign('produtoraelenco_id', '75826_59c44312dd1f9')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('selecoesv2s', function(Blueprint $table) {
            
        });
    }
}
