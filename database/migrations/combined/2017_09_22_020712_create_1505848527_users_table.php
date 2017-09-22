<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1505848527UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('email');
                $table->string('password');
                $table->string('remember_token')->nullable();
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
                $table->string('telefone1')->nullable();
                $table->string('telefone2')->nullable();
                $table->string('facebook')->nullable();
                $table->string('instagram')->nullable();
                $table->string('fotoprincipal')->nullable();
                $table->text('apresentacao')->nullable();
                $table->string('curriculum')->nullable();
                $table->double('peso', 15, 2)->nullable();
                $table->double('altura', 15, 2)->nullable();
                $table->double('calcado', 15, 2)->nullable();
                $table->double('manequim', 15, 2)->nullable();
                $table->double('camisa', 15, 2)->nullable();
                $table->double('terno', 15, 2)->nullable();
                $table->double('busto', 15, 2)->nullable();
                $table->double('cintura', 15, 2)->nullable();
                $table->double('quadril', 15, 2)->nullable();
                $table->string('pele')->nullable();
                $table->string('cabelocor')->nullable();
                $table->string('cabelotipo')->nullable();
                $table->string('olhos')->nullable();
                $table->string('rg')->nullable();
                $table->string('cpf')->nullable();
                $table->string('nacionalidade')->nullable();
                $table->string('escolaridade')->nullable();
                $table->string('escolacurso')->nullable();
                $table->string('estadocivil')->nullable();
                $table->string('profissao')->nullable();
                $table->string('rgufemissor')->nullable();
                $table->string('rgorgaoemissor')->nullable();
                $table->tinyInteger('exclusividade')->nullable()->default(0);
                $table->string('orgaoprofissional')->nullable();
                $table->string('registroprofissional')->nullable();
                
                $table->timestamps();
                
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
        Schema::dropIfExists('users');
    }
}
