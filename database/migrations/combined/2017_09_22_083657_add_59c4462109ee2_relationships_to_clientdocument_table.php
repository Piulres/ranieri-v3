<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59c4462109ee2RelationshipsToClientDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_documents', function(Blueprint $table) {
            if (!Schema::hasColumn('client_documents', 'project_id')) {
                $table->integer('project_id')->unsigned()->nullable();
                $table->foreign('project_id', '75468_59c2fec4b6539')->references('id')->on('client_projects')->onDelete('cascade');
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
        Schema::table('client_documents', function(Blueprint $table) {
            if(Schema::hasColumn('client_documents', 'project_id')) {
                $table->dropForeign('75468_59c2fec4b6539');
                $table->dropIndex('75468_59c2fec4b6539');
                $table->dropColumn('project_id');
            }
            
        });
    }
}
