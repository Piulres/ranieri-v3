<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class SelecaoelencoTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreateSelecaoelenco()
    {
        $admin = \App\User::find(1);
        $selecaoelenco = factory('App\Selecaoelenco')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $selecaoelenco) {
            $browser->loginAs($admin)
                ->visit(route('admin.selecaoelencos.index'))
                ->clickLink('Add new')
                ->select("selecaoelencov2_id", $selecaoelenco->selecaoelencov2_id)
                ->select("atorselecao_id", $selecaoelenco->atorselecao_id)
                ->radio("statusator", $selecaoelenco->statusator)
                ->type("observacaoselecao", $selecaoelenco->observacaoselecao)
                ->press('Save')
                ->assertRouteIs('admin.selecaoelencos.index')
                ->assertSeeIn("tr:last-child td[field-key='selecaoelencov2']", $selecaoelenco->selecaoelencov2->selecaonome)
                ->assertSeeIn("tr:last-child td[field-key='atorselecao']", $selecaoelenco->atorselecao->nomeartistico)
                ->assertSeeIn("tr:last-child td[field-key='statusator']", $selecaoelenco->statusator);
        });
    }

    public function testEditSelecaoelenco()
    {
        $admin = \App\User::find(1);
        $selecaoelenco = factory('App\Selecaoelenco')->create();
        $selecaoelenco2 = factory('App\Selecaoelenco')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $selecaoelenco, $selecaoelenco2) {
            $browser->loginAs($admin)
                ->visit(route('admin.selecaoelencos.index'))
                ->click('tr[data-entry-id="' . $selecaoelenco->id . '"] .btn-info')
                ->select("selecaoelencov2_id", $selecaoelenco2->selecaoelencov2_id)
                ->select("atorselecao_id", $selecaoelenco2->atorselecao_id)
                ->radio("statusator", $selecaoelenco2->statusator)
                ->type("observacaoselecao", $selecaoelenco2->observacaoselecao)
                ->press('Update')
                ->assertRouteIs('admin.selecaoelencos.index')
                ->assertSeeIn("tr:last-child td[field-key='selecaoelencov2']", $selecaoelenco2->selecaoelencov2->selecaonome)
                ->assertSeeIn("tr:last-child td[field-key='atorselecao']", $selecaoelenco2->atorselecao->nomeartistico)
                ->assertSeeIn("tr:last-child td[field-key='statusator']", $selecaoelenco2->statusator);
        });
    }

    public function testShowSelecaoelenco()
    {
        $admin = \App\User::find(1);
        $selecaoelenco = factory('App\Selecaoelenco')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $selecaoelenco) {
            $browser->loginAs($admin)
                ->visit(route('admin.selecaoelencos.index'))
                ->click('tr[data-entry-id="' . $selecaoelenco->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='selecaoelencov2']", $selecaoelenco->selecaoelencov2->selecaonome)
                ->assertSeeIn("td[field-key='atorselecao']", $selecaoelenco->atorselecao->nomeartistico)
                ->assertSeeIn("td[field-key='statusator']", $selecaoelenco->statusator)
                ->assertSeeIn("td[field-key='observacaoselecao']", $selecaoelenco->observacaoselecao);
        });
    }

}
