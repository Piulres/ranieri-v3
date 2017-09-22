<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59c44620de762RelationshipsToClientProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_projects', function(Blueprint $table) {
            if (!Schema::hasColumn('client_projects', 'client_id')) {
                $table->integer('client_id')->unsigned()->nullable();
                $table->foreign('client_id', '75466_59c2feb64e9be')->references('id')->on('clients')->onDelete('cascade');
                }
                if (!Schema::hasColumn('client_projects', 'produtora_id')) {
                $table->integer('produtora_id')->unsigned()->nullable();
                $table->foreign('produtora_id', '75466_59c30029b1384')->references('id')->on('produtoras')->onDelete('cascade');
                }
                if (!Schema::hasColumn('client_projects', 'project_status_id')) {
                $table->integer('project_status_id')->unsigned()->nullable();
                $table->foreign('project_status_id', '75466_59c2feb657045')->references('id')->on('client_project_statuses')->onDelete('cascade');
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
        Schema::table('client_projects', function(Blueprint $table) {
            if(Schema::hasColumn('client_projects', 'client_id')) {
                $table->dropForeign('75466_59c2feb64e9be');
                $table->dropIndex('75466_59c2feb64e9be');
                $table->dropColumn('client_id');
            }
            if(Schema::hasColumn('client_projects', 'produtora_id')) {
                $table->dropForeign('75466_59c30029b1384');
                $table->dropIndex('75466_59c30029b1384');
                $table->dropColumn('produtora_id');
            }
            if(Schema::hasColumn('client_projects', 'project_status_id')) {
                $table->dropForeign('75466_59c2feb657045');
                $table->dropIndex('75466_59c2feb657045');
                $table->dropColumn('project_status_id');
            }
            
        });
    }
}
