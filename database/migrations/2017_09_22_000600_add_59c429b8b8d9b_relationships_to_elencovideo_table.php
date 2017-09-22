<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59c429b8b8d9bRelationshipsToElencoVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('elenco_videos', function(Blueprint $table) {
            if (!Schema::hasColumn('elenco_videos', 'elenco_id')) {
                $table->integer('elenco_id')->unsigned()->nullable();
                $table->foreign('elenco_id', '75806_59c41a94bea5a')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('elenco_videos', function(Blueprint $table) {
            
        });
    }
}
