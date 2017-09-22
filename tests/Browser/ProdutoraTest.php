<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class ProdutoraTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreateProdutora()
    {
        $admin = \App\User::find(1);
        $produtora = factory('App\Produtora')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $produtora) {
            $browser->loginAs($admin)
                ->visit(route('admin.produtoras.index'))
                ->clickLink('Add new')
                ->type("nome", $produtora->nome)
                ->press('Save')
                ->assertRouteIs('admin.produtoras.index')
                ->assertSeeIn("tr:last-child td[field-key='nome']", $produtora->nome);
        });
    }

    public function testEditProdutora()
    {
        $admin = \App\User::find(1);
        $produtora = factory('App\Produtora')->create();
        $produtora2 = factory('App\Produtora')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $produtora, $produtora2) {
            $browser->loginAs($admin)
                ->visit(route('admin.produtoras.index'))
                ->click('tr[data-entry-id="' . $produtora->id . '"] .btn-info')
                ->type("nome", $produtora2->nome)
                ->press('Update')
                ->assertRouteIs('admin.produtoras.index')
                ->assertSeeIn("tr:last-child td[field-key='nome']", $produtora2->nome);
        });
    }

    public function testShowProdutora()
    {
        $admin = \App\User::find(1);
        $produtora = factory('App\Produtora')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $produtora) {
            $browser->loginAs($admin)
                ->visit(route('admin.produtoras.index'))
                ->click('tr[data-entry-id="' . $produtora->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='nome']", $produtora->nome);
        });
    }

}
