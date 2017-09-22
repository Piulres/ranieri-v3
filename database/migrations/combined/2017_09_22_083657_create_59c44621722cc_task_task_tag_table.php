<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create59c44621722ccTaskTaskTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('task_task_tag')) {
            Schema::create('task_task_tag', function (Blueprint $table) {
                $table->integer('task_id')->unsigned()->nullable();
                $table->foreign('task_id', 'fk_p_75078_75077_tasktag__59c44621723e1')->references('id')->on('tasks')->onDelete('cascade');
                $table->integer('task_tag_id')->unsigned()->nullable();
                $table->foreign('task_tag_id', 'fk_p_75077_75078_task_tas_59c4462172474')->references('id')->on('task_tags')->onDelete('cascade');
                
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
        Schema::dropIfExists('task_task_tag');
    }
}
