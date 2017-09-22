<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class ElencoTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreateElenco()
    {
        $admin = \App\User::find(1);
        $elenco = factory('App\Elenco')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $elenco) {
            $browser->loginAs($admin)
                ->visit(route('admin.elencos.index'))
                ->clickLink('Add new')
                ->type("nome", $elenco->nome)
                ->type("nomeelenco", $elenco->nomeelenco)
                ->press('Save')
                ->assertRouteIs('admin.elencos.index')
                ->assertSeeIn("tr:last-child td[field-key='nome']", $elenco->nome)
                ->assertSeeIn("tr:last-child td[field-key='nomeelenco']", $elenco->nomeelenco);
        });
    }

    public function testEditElenco()
    {
        $admin = \App\User::find(1);
        $elenco = factory('App\Elenco')->create();
        $elenco2 = factory('App\Elenco')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $elenco, $elenco2) {
            $browser->loginAs($admin)
                ->visit(route('admin.elencos.index'))
                ->click('tr[data-entry-id="' . $elenco->id . '"] .btn-info')
                ->type("nome", $elenco2->nome)
                ->type("nomeelenco", $elenco2->nomeelenco)
                ->press('Update')
                ->assertRouteIs('admin.elencos.index')
                ->assertSeeIn("tr:last-child td[field-key='nome']", $elenco2->nome)
                ->assertSeeIn("tr:last-child td[field-key='nomeelenco']", $elenco2->nomeelenco);
        });
    }

    public function testShowElenco()
    {
        $admin = \App\User::find(1);
        $elenco = factory('App\Elenco')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $elenco) {
            $browser->loginAs($admin)
                ->visit(route('admin.elencos.index'))
                ->click('tr[data-entry-id="' . $elenco->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='nome']", $elenco->nome)
                ->assertSeeIn("td[field-key='nomeelenco']", $elenco->nomeelenco);
        });
    }

}
