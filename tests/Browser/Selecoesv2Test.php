<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class Selecoesv2Test extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreateSelecoesv2()
    {
        $admin = \App\User::find(1);
        $selecoesv2 = factory('App\Selecoesv2')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $selecoesv2) {
            $browser->loginAs($admin)
                ->visit(route('admin.selecoesv2s.index'))
                ->clickLink('Add new')
                ->type("selecaonome", $selecoesv2->selecaonome)
                ->type("datafimselecao", $selecoesv2->datafimselecao)
                ->type("descricao", $selecoesv2->descricao)
                ->select("produtoraelenco_id", $selecoesv2->produtoraelenco_id)
                ->press('Save')
                ->assertRouteIs('admin.selecoesv2s.index')
                ->assertSeeIn("tr:last-child td[field-key='selecaonome']", $selecoesv2->selecaonome)
                ->assertSeeIn("tr:last-child td[field-key='datafimselecao']", $selecoesv2->datafimselecao)
                ->assertSeeIn("tr:last-child td[field-key='produtoraelenco']", $selecoesv2->produtoraelenco->name);
        });
    }

    public function testEditSelecoesv2()
    {
        $admin = \App\User::find(1);
        $selecoesv2 = factory('App\Selecoesv2')->create();
        $selecoesv22 = factory('App\Selecoesv2')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $selecoesv2, $selecoesv22) {
            $browser->loginAs($admin)
                ->visit(route('admin.selecoesv2s.index'))
                ->click('tr[data-entry-id="' . $selecoesv2->id . '"] .btn-info')
                ->type("selecaonome", $selecoesv22->selecaonome)
                ->type("datafimselecao", $selecoesv22->datafimselecao)
                ->type("descricao", $selecoesv22->descricao)
                ->select("produtoraelenco_id", $selecoesv22->produtoraelenco_id)
                ->press('Update')
                ->assertRouteIs('admin.selecoesv2s.index')
                ->assertSeeIn("tr:last-child td[field-key='selecaonome']", $selecoesv22->selecaonome)
                ->assertSeeIn("tr:last-child td[field-key='datafimselecao']", $selecoesv22->datafimselecao)
                ->assertSeeIn("tr:last-child td[field-key='produtoraelenco']", $selecoesv22->produtoraelenco->name);
        });
    }

    public function testShowSelecoesv2()
    {
        $admin = \App\User::find(1);
        $selecoesv2 = factory('App\Selecoesv2')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $selecoesv2) {
            $browser->loginAs($admin)
                ->visit(route('admin.selecoesv2s.index'))
                ->click('tr[data-entry-id="' . $selecoesv2->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='selecaonome']", $selecoesv2->selecaonome)
                ->assertSeeIn("td[field-key='datafimselecao']", $selecoesv2->datafimselecao)
                ->assertSeeIn("td[field-key='descricao']", $selecoesv2->descricao)
                ->assertSeeIn("td[field-key='produtoraelenco']", $selecoesv2->produtoraelenco->name);
        });
    }

}
