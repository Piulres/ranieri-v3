<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1506024083ElencoVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('elenco_videos')) {
            Schema::create('elenco_videos', function (Blueprint $table) {
                $table->increments('id');
                $table->string('urlvideo')->nullable();
                $table->tinyInteger('ativo')->nullable()->default(1);
                
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
        Schema::dropIfExists('elenco_videos');
    }
}
