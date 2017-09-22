<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1506019528UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
if (!Schema::hasColumn('users', 'olhos')) {
                $table->string('olhos')->nullable();
                }
if (!Schema::hasColumn('users', 'rg')) {
                $table->string('rg')->nullable();
                }
if (!Schema::hasColumn('users', 'cpf')) {
                $table->string('cpf')->nullable();
                }
if (!Schema::hasColumn('users', 'nacionalidade')) {
                $table->string('nacionalidade')->nullable();
                }
if (!Schema::hasColumn('users', 'escolaridade')) {
                $table->string('escolaridade')->nullable();
                }
if (!Schema::hasColumn('users', 'escolacurso')) {
                $table->string('escolacurso')->nullable();
                }
if (!Schema::hasColumn('users', 'estadocivil')) {
                $table->string('estadocivil')->nullable();
                }
if (!Schema::hasColumn('users', 'profissao')) {
                $table->string('profissao')->nullable();
                }
if (!Schema::hasColumn('users', 'rgufemissor')) {
                $table->string('rgufemissor')->nullable();
                }
if (!Schema::hasColumn('users', 'rgorgaoemissor')) {
                $table->string('rgorgaoemissor')->nullable();
                }
if (!Schema::hasColumn('users', 'exclusividade')) {
                $table->tinyInteger('exclusividade')->nullable()->default(0);
                }
if (!Schema::hasColumn('users', 'orgaoprofissional')) {
                $table->string('orgaoprofissional')->nullable();
                }
if (!Schema::hasColumn('users', 'registroprofissional')) {
                $table->string('registroprofissional')->nullable();
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
            $table->dropColumn('olhos');
            $table->dropColumn('rg');
            $table->dropColumn('cpf');
            $table->dropColumn('nacionalidade');
            $table->dropColumn('escolaridade');
            $table->dropColumn('escolacurso');
            $table->dropColumn('estadocivil');
            $table->dropColumn('profissao');
            $table->dropColumn('rgufemissor');
            $table->dropColumn('rgorgaoemissor');
            $table->dropColumn('exclusividade');
            $table->dropColumn('orgaoprofissional');
            $table->dropColumn('registroprofissional');
            
        });

    }
}
