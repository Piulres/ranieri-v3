<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59c4462101834RelationshipsToClientNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_notes', function(Blueprint $table) {
            if (!Schema::hasColumn('client_notes', 'project_id')) {
                $table->integer('project_id')->unsigned()->nullable();
                $table->foreign('project_id', '75467_59c2febdf19db')->references('id')->on('client_projects')->onDelete('cascade');
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
        Schema::table('client_notes', function(Blueprint $table) {
            if(Schema::hasColumn('client_notes', 'project_id')) {
                $table->dropForeign('75467_59c2febdf19db');
                $table->dropIndex('75467_59c2febdf19db');
                $table->dropColumn('project_id');
            }
            
        });
    }
}
