<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class UserTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreateUser()
    {
        $admin = \App\User::find(1);
        $user = factory('App\User')->make();

        $relations = [
            factory('App\Role')->create(), 
            factory('App\Role')->create(), 
        ];

        $this->browse(function (Browser $browser) use ($admin, $user, $relations) {
            $browser->loginAs($admin)
                ->visit(route('admin.users.index'))
                ->clickLink('Add new')
                ->type("name", $user->name)
                ->type("email", $user->email)
                ->type("password", $user->password)
                ->select('select[name="role[]"]', $relations[0]->id)
                ->select('select[name="role[]"]', $relations[1]->id)
                ->type("nomeartistico", $user->nomeartistico)
                ->type("datanascimento", $user->datanascimento)
                ->radio("sexo", $user->sexo)
                ->type("endcidade", $user->endcidade)
                ->type("enduf", $user->enduf)
                ->type("cep", $user->cep)
                ->type("endrua", $user->endrua)
                ->type("endnumero", $user->endnumero)
                ->type("endcomplemento", $user->endcomplemento)
                ->type("celular", $user->celular)
                ->type("celular2", $user->celular2)
                ->type("telefone1", $user->telefone1)
                ->type("telefone2", $user->telefone2)
                ->type("facebook", $user->facebook)
                ->type("instagram", $user->instagram)
                ->attach("fotoprincipal", base_path("tests/_resources/test.jpg"))
                ->type("apresentacao", $user->apresentacao)
                ->attach("curriculum", base_path("tests/_resources/test.jpg"))
                ->type("peso", $user->peso)
                ->type("altura", $user->altura)
                ->type("calcado", $user->calcado)
                ->type("manequim", $user->manequim)
                ->type("camisa", $user->camisa)
                ->type("terno", $user->terno)
                ->type("busto", $user->busto)
                ->type("cintura", $user->cintura)
                ->type("quadril", $user->quadril)
                ->radio("pele", $user->pele)
                ->radio("cabelocor", $user->cabelocor)
                ->radio("cabelotipo", $user->cabelotipo)
                ->radio("olhos", $user->olhos)
                ->type("rg", $user->rg)
                ->type("cpf", $user->cpf)
                ->type("nacionalidade", $user->nacionalidade)
                ->radio("escolaridade", $user->escolaridade)
                ->type("escolacurso", $user->escolacurso)
                ->radio("estadocivil", $user->estadocivil)
                ->type("profissao", $user->profissao)
                ->type("rgufemissor", $user->rgufemissor)
                ->type("rgorgaoemissor", $user->rgorgaoemissor)
                ->check("exclusividade")
                ->type("orgaoprofissional", $user->orgaoprofissional)
                ->type("registroprofissional", $user->registroprofissional)
                ->press('Save')
                ->assertRouteIs('admin.users.index')
                ->assertSeeIn("tr:last-child td[field-key='name']", $user->name)
                ->assertSeeIn("tr:last-child td[field-key='email']", $user->email)
                ->assertSeeIn("tr:last-child td[field-key='role'] span:first-child", $relations[0]->title)
                ->assertSeeIn("tr:last-child td[field-key='role'] span:last-child", $relations[1]->title)
                ->assertSeeIn("tr:last-child td[field-key='nomeartistico']", $user->nomeartistico)
                ->assertSeeIn("tr:last-child td[field-key='sexo']", $user->sexo)
                ->assertVisible("img[src='" . env("APP_URL") . "/" . env("UPLOAD_PATH") . "/thumb/" . \App\User::first()->fotoprincipal . "']");
        });
    }

    public function testEditUser()
    {
        $admin = \App\User::find(1);
        $user = factory('App\User')->create();
        $user2 = factory('App\User')->make();

        $relations = [
            factory('App\Role')->create(), 
            factory('App\Role')->create(), 
        ];

        $this->browse(function (Browser $browser) use ($admin, $user, $user2, $relations) {
            $browser->loginAs($admin)
                ->visit(route('admin.users.index'))
                ->click('tr[data-entry-id="' . $user->id . '"] .btn-info')
                ->type("name", $user2->name)
                ->type("email", $user2->email)
                ->type("password", $user2->password)
                ->select('select[name="role[]"]', $relations[0]->id)
                ->select('select[name="role[]"]', $relations[1]->id)
                ->type("nomeartistico", $user2->nomeartistico)
                ->type("datanascimento", $user2->datanascimento)
                ->radio("sexo", $user2->sexo)
                ->type("endcidade", $user2->endcidade)
                ->type("enduf", $user2->enduf)
                ->type("cep", $user2->cep)
                ->type("endrua", $user2->endrua)
                ->type("endnumero", $user2->endnumero)
                ->type("endcomplemento", $user2->endcomplemento)
                ->type("celular", $user2->celular)
                ->type("celular2", $user2->celular2)
                ->type("telefone1", $user2->telefone1)
                ->type("telefone2", $user2->telefone2)
                ->type("facebook", $user2->facebook)
                ->type("instagram", $user2->instagram)
                ->attach("fotoprincipal", base_path("tests/_resources/test.jpg"))
                ->type("apresentacao", $user2->apresentacao)
                ->attach("curriculum", base_path("tests/_resources/test.jpg"))
                ->type("peso", $user2->peso)
                ->type("altura", $user2->altura)
                ->type("calcado", $user2->calcado)
                ->type("manequim", $user2->manequim)
                ->type("camisa", $user2->camisa)
                ->type("terno", $user2->terno)
                ->type("busto", $user2->busto)
                ->type("cintura", $user2->cintura)
                ->type("quadril", $user2->quadril)
                ->radio("pele", $user2->pele)
                ->radio("cabelocor", $user2->cabelocor)
                ->radio("cabelotipo", $user2->cabelotipo)
                ->radio("olhos", $user2->olhos)
                ->type("rg", $user2->rg)
                ->type("cpf", $user2->cpf)
                ->type("nacionalidade", $user2->nacionalidade)
                ->radio("escolaridade", $user2->escolaridade)
                ->type("escolacurso", $user2->escolacurso)
                ->radio("estadocivil", $user2->estadocivil)
                ->type("profissao", $user2->profissao)
                ->type("rgufemissor", $user2->rgufemissor)
                ->type("rgorgaoemissor", $user2->rgorgaoemissor)
                ->check("exclusividade")
                ->type("orgaoprofissional", $user2->orgaoprofissional)
                ->type("registroprofissional", $user2->registroprofissional)
                ->press('Update')
                ->assertRouteIs('admin.users.index')
                ->assertSeeIn("tr:last-child td[field-key='name']", $user2->name)
                ->assertSeeIn("tr:last-child td[field-key='email']", $user2->email)
                ->assertSeeIn("tr:last-child td[field-key='role'] span:first-child", $relations[0]->title)
                ->assertSeeIn("tr:last-child td[field-key='role'] span:last-child", $relations[1]->title)
                ->assertSeeIn("tr:last-child td[field-key='nomeartistico']", $user2->nomeartistico)
                ->assertSeeIn("tr:last-child td[field-key='sexo']", $user2->sexo)
                ->assertVisible("img[src='" . env("APP_URL") . "/" . env("UPLOAD_PATH") . "/thumb/" . \App\User::first()->fotoprincipal . "']");
        });
    }

    public function testShowUser()
    {
        $admin = \App\User::find(1);
        $user = factory('App\User')->create();

        $relations = [
            factory('App\Role')->create(), 
            factory('App\Role')->create(), 
        ];

        $user->role()->attach([$relations[0]->id, $relations[1]->id]);

        $this->browse(function (Browser $browser) use ($admin, $user, $relations) {
            $browser->loginAs($admin)
                ->visit(route('admin.users.index'))
                ->click('tr[data-entry-id="' . $user->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='name']", $user->name)
                ->assertSeeIn("td[field-key='email']", $user->email)
                ->assertSeeIn("tr:last-child td[field-key='role'] span:first-child", $relations[0]->title)
                ->assertSeeIn("tr:last-child td[field-key='role'] span:last-child", $relations[1]->title)
                ->assertSeeIn("td[field-key='nomeartistico']", $user->nomeartistico)
                ->assertSeeIn("td[field-key='datanascimento']", $user->datanascimento)
                ->assertSeeIn("td[field-key='sexo']", $user->sexo)
                ->assertSeeIn("td[field-key='endcidade']", $user->endcidade)
                ->assertSeeIn("td[field-key='enduf']", $user->enduf)
                ->assertSeeIn("td[field-key='cep']", $user->cep)
                ->assertSeeIn("td[field-key='endrua']", $user->endrua)
                ->assertSeeIn("td[field-key='endnumero']", $user->endnumero)
                ->assertSeeIn("td[field-key='endcomplemento']", $user->endcomplemento)
                ->assertSeeIn("td[field-key='celular']", $user->celular)
                ->assertSeeIn("td[field-key='celular2']", $user->celular2)
                ->assertSeeIn("td[field-key='telefone1']", $user->telefone1)
                ->assertSeeIn("td[field-key='telefone2']", $user->telefone2)
                ->assertSeeIn("td[field-key='facebook']", $user->facebook)
                ->assertSeeIn("td[field-key='instagram']", $user->instagram)
                ->assertSeeIn("td[field-key='apresentacao']", $user->apresentacao)
                ->assertSeeIn("td[field-key='peso']", $user->peso)
                ->assertSeeIn("td[field-key='altura']", $user->altura)
                ->assertSeeIn("td[field-key='calcado']", $user->calcado)
                ->assertSeeIn("td[field-key='manequim']", $user->manequim)
                ->assertSeeIn("td[field-key='camisa']", $user->camisa)
                ->assertSeeIn("td[field-key='terno']", $user->terno)
                ->assertSeeIn("td[field-key='busto']", $user->busto)
                ->assertSeeIn("td[field-key='cintura']", $user->cintura)
                ->assertSeeIn("td[field-key='quadril']", $user->quadril)
                ->assertSeeIn("td[field-key='pele']", $user->pele)
                ->assertSeeIn("td[field-key='cabelocor']", $user->cabelocor)
                ->assertSeeIn("td[field-key='cabelotipo']", $user->cabelotipo)
                ->assertSeeIn("td[field-key='olhos']", $user->olhos)
                ->assertSeeIn("td[field-key='rg']", $user->rg)
                ->assertSeeIn("td[field-key='cpf']", $user->cpf)
                ->assertSeeIn("td[field-key='nacionalidade']", $user->nacionalidade)
                ->assertSeeIn("td[field-key='escolaridade']", $user->escolaridade)
                ->assertSeeIn("td[field-key='escolacurso']", $user->escolacurso)
                ->assertSeeIn("td[field-key='estadocivil']", $user->estadocivil)
                ->assertSeeIn("td[field-key='profissao']", $user->profissao)
                ->assertSeeIn("td[field-key='rgufemissor']", $user->rgufemissor)
                ->assertSeeIn("td[field-key='rgorgaoemissor']", $user->rgorgaoemissor)
                ->assertNotChecked("exclusividade")
                ->assertSeeIn("td[field-key='orgaoprofissional']", $user->orgaoprofissional)
                ->assertSeeIn("td[field-key='registroprofissional']", $user->registroprofissional);
        });
    }

}
