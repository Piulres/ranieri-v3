<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59c2fecc87524RelationshipsToClientTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_transactions', function(Blueprint $table) {
            if (!Schema::hasColumn('client_transactions', 'project_id')) {
                $table->integer('project_id')->unsigned()->nullable();
                $table->foreign('project_id', '75469_59c2fecb2fda2')->references('id')->on('client_projects')->onDelete('cascade');
                }
                if (!Schema::hasColumn('client_transactions', 'transaction_type_id')) {
                $table->integer('transaction_type_id')->unsigned()->nullable();
                $table->foreign('transaction_type_id', '75469_59c2fecb3ec75')->references('id')->on('client_transaction_types')->onDelete('cascade');
                }
                if (!Schema::hasColumn('client_transactions', 'income_source_id')) {
                $table->integer('income_source_id')->unsigned()->nullable();
                $table->foreign('income_source_id', '75469_59c2fecb4caf6')->references('id')->on('client_income_sources')->onDelete('cascade');
                }
                if (!Schema::hasColumn('client_transactions', 'currency_id')) {
                $table->integer('currency_id')->unsigned()->nullable();
                $table->foreign('currency_id', '75469_59c2fecb5a6ce')->references('id')->on('client_currencies')->onDelete('cascade');
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
        Schema::table('client_transactions', function(Blueprint $table) {
            
        });
    }
}
