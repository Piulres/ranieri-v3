<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1506013031UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            
if (!Schema::hasColumn('users', 'telefone1')) {
                $table->string('telefone1')->nullable();
                }
if (!Schema::hasColumn('users', 'telefone2')) {
                $table->string('telefone2')->nullable();
                }
if (!Schema::hasColumn('users', 'facebook')) {
                $table->string('facebook')->nullable();
                }
if (!Schema::hasColumn('users', 'instagram')) {
                $table->string('instagram')->nullable();
                }
if (!Schema::hasColumn('users', 'fotoprincipal')) {
                $table->string('fotoprincipal')->nullable();
                }
if (!Schema::hasColumn('users', 'apresentacao')) {
                $table->text('apresentacao')->nullable();
                }
if (!Schema::hasColumn('users', 'curriculum')) {
                $table->string('curriculum')->nullable();
                }
if (!Schema::hasColumn('users', 'peso')) {
                $table->double('peso', 15, 2)->nullable();
                }
if (!Schema::hasColumn('users', 'altura')) {
                $table->double('altura', 15, 2)->nullable();
                }
if (!Schema::hasColumn('users', 'calcado')) {
                $table->double('calcado', 15, 2)->nullable();
                }
if (!Schema::hasColumn('users', 'manequim')) {
                $table->double('manequim', 15, 2)->nullable();
                }
if (!Schema::hasColumn('users', 'camisa')) {
                $table->double('camisa', 15, 2)->nullable();
                }
if (!Schema::hasColumn('users', 'terno')) {
                $table->double('terno', 15, 2)->nullable();
                }
if (!Schema::hasColumn('users', 'busto')) {
                $table->double('busto', 15, 2)->nullable();
                }
if (!Schema::hasColumn('users', 'cintura')) {
                $table->double('cintura', 15, 2)->nullable();
                }
if (!Schema::hasColumn('users', 'quadril')) {
                $table->double('quadril', 15, 2)->nullable();
                }
if (!Schema::hasColumn('users', 'pele')) {
                $table->string('pele')->nullable();
                }
if (!Schema::hasColumn('users', 'cabelocor')) {
                $table->string('cabelocor')->nullable();
                }
if (!Schema::hasColumn('users', 'cabelotipo')) {
                $table->string('cabelotipo')->nullable();
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
            $table->dropColumn('telefone1');
            $table->dropColumn('telefone2');
            $table->dropColumn('facebook');
            $table->dropColumn('instagram');
            $table->dropColumn('fotoprincipal');
            $table->dropColumn('apresentacao');
            $table->dropColumn('curriculum');
            $table->dropColumn('peso');
            $table->dropColumn('altura');
            $table->dropColumn('calcado');
            $table->dropColumn('manequim');
            $table->dropColumn('camisa');
            $table->dropColumn('terno');
            $table->dropColumn('busto');
            $table->dropColumn('cintura');
            $table->dropColumn('quadril');
            $table->dropColumn('pele');
            $table->dropColumn('cabelocor');
            $table->dropColumn('cabelotipo');
            
        });

    }
}
