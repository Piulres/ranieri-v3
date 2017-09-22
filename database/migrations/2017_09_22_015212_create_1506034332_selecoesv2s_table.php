<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1506034332Selecoesv2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('selecoesv2s')) {
            Schema::create('selecoesv2s', function (Blueprint $table) {
                $table->increments('id');
                $table->string('selecaonome');
                $table->date('datafimselecao')->nullable();
                $table->string('descricao')->nullable();
                
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
        Schema::dropIfExists('selecoesv2s');
    }
}
