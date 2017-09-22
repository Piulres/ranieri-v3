<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1505958885UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if(Schema::hasColumn('users', 'nomeartistico')) {
                $table->dropColumn('nomeartistico');
            }
            if(Schema::hasColumn('users', 'datanascimento')) {
                $table->dropColumn('datanascimento');
            }
            if(Schema::hasColumn('users', 'sexo')) {
                $table->dropColumn('sexo');
            }
            if(Schema::hasColumn('users', 'endcidade')) {
                $table->dropColumn('endcidade');
            }
            if(Schema::hasColumn('users', 'enduf')) {
                $table->dropColumn('enduf');
            }
            if(Schema::hasColumn('users', 'cep')) {
                $table->dropColumn('cep');
            }
            if(Schema::hasColumn('users', 'endrua')) {
                $table->dropColumn('endrua');
            }
            if(Schema::hasColumn('users', 'endnumero')) {
                $table->dropColumn('endnumero');
            }
            if(Schema::hasColumn('users', 'endcomplemento')) {
                $table->dropColumn('endcomplemento');
            }
            if(Schema::hasColumn('users', 'celular')) {
                $table->dropColumn('celular');
            }
            if(Schema::hasColumn('users', 'celular2')) {
                $table->dropColumn('celular2');
            }
            
        });
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
Schema::table('users', function (Blueprint $table) {
                        $table->string('nomeartistico')->nullable();
                $table->date('datanascimento')->nullable();
                $table->string('sexo')->nullable();
                $table->string('endcidade')->nullable();
                $table->string('enduf')->nullable();
                $table->string('cep')->nullable();
                $table->string('endrua')->nullable();
                $table->string('endnumero')->nullable();
                $table->string('endcomplemento')->nullable();
                $table->string('celular')->nullable();
                $table->string('celular2')->nullable();
                
        });

    }
}
