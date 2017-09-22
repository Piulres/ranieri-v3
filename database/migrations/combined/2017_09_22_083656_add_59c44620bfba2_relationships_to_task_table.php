<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59c44620bfba2RelationshipsToTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function(Blueprint $table) {
            if (!Schema::hasColumn('tasks', 'status_id')) {
                $table->integer('status_id')->unsigned()->nullable();
                $table->foreign('status_id', '75078_59c17c6020846')->references('id')->on('task_statuses')->onDelete('cascade');
                }
                if (!Schema::hasColumn('tasks', 'user_id')) {
                $table->integer('user_id')->unsigned()->nullable();
                $table->foreign('user_id', '75078_59c17c6026fdb')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('tasks', function(Blueprint $table) {
            if(Schema::hasColumn('tasks', 'status_id')) {
                $table->dropForeign('75078_59c17c6020846');
                $table->dropIndex('75078_59c17c6020846');
                $table->dropColumn('status_id');
            }
            if(Schema::hasColumn('tasks', 'user_id')) {
                $table->dropForeign('75078_59c17c6026fdb');
                $table->dropIndex('75078_59c17c6026fdb');
                $table->dropColumn('user_id');
            }
            
        });
    }
}
