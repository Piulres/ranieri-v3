<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1505958812UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
if (!Schema::hasColumn('users', 'nomeartistico')) {
                $table->string('nomeartistico')->nullable();
                }
if (!Schema::hasColumn('users', 'datanascimento')) {
                $table->date('datanascimento')->nullable();
                }
if (!Schema::hasColumn('users', 'sexo')) {
                $table->string('sexo')->nullable();
                }
if (!Schema::hasColumn('users', 'endcidade')) {
                $table->string('endcidade')->nullable();
                }
if (!Schema::hasColumn('users', 'enduf')) {
                $table->string('enduf')->nullable();
                }
if (!Schema::hasColumn('users', 'cep')) {
                $table->string('cep')->nullable();
                }
if (!Schema::hasColumn('users', 'endrua')) {
                $table->string('endrua')->nullable();
                }
if (!Schema::hasColumn('users', 'endnumero')) {
                $table->string('endnumero')->nullable();
                }
if (!Schema::hasColumn('users', 'endcomplemento')) {
                $table->string('endcomplemento')->nullable();
                }
if (!Schema::hasColumn('users', 'celular')) {
                $table->string('celular')->nullable();
                }
if (!Schema::hasColumn('users', 'celular2')) {
                $table->string('celular2')->nullable();
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nomeartistico');
            $table->dropColumn('datanascimento');
            $table->dropColumn('sexo');
            $table->dropColumn('endcidade');
            $table->dropColumn('enduf');
            $table->dropColumn('cep');
            $table->dropColumn('endrua');
            $table->dropColumn('endnumero');
            $table->dropColumn('endcomplemento');
            $table->dropColumn('celular');
            $table->dropColumn('celular2');
            
        });

    }
}
