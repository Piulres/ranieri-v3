<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class ElencofotoTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreateElencofoto()
    {
        $admin = \App\User::find(1);
        $elencofoto = factory('App\Elencofoto')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $elencofoto) {
            $browser->loginAs($admin)
                ->visit(route('admin.elencofotos.index'))
                ->clickLink('Add new')
                ->select("elenco_id", $elencofoto->elenco_id)
                ->attach("foto", base_path("tests/_resources/test.jpg"))
                ->uncheck("ativo")
                ->press('Save')
                ->assertRouteIs('admin.elencofotos.index')
                ->assertSeeIn("tr:last-child td[field-key='elenco']", $elencofoto->elenco->name)
                ->assertVisible("img[src='" . env("APP_URL") . "/" . env("UPLOAD_PATH") . "/thumb/" . \App\Elencofoto::first()->foto . "']")
                ->assertNotChecked("ativo");
        });
    }

    public function testEditElencofoto()
    {
        $admin = \App\User::find(1);
        $elencofoto = factory('App\Elencofoto')->create();
        $elencofoto2 = factory('App\Elencofoto')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $elencofoto, $elencofoto2) {
            $browser->loginAs($admin)
                ->visit(route('admin.elencofotos.index'))
                ->click('tr[data-entry-id="' . $elencofoto->id . '"] .btn-info')
                ->select("elenco_id", $elencofoto2->elenco_id)
                ->attach("foto", base_path("tests/_resources/test.jpg"))
                ->uncheck("ativo")
                ->press('Update')
                ->assertRouteIs('admin.elencofotos.index')
                ->assertSeeIn("tr:last-child td[field-key='elenco']", $elencofoto2->elenco->name)
                ->assertVisible("img[src='" . env("APP_URL") . "/" . env("UPLOAD_PATH") . "/thumb/" . \App\Elencofoto::first()->foto . "']")
                ->assertNotChecked("ativo");
        });
    }

    public function testShowElencofoto()
    {
        $admin = \App\User::find(1);
        $elencofoto = factory('App\Elencofoto')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $elencofoto) {
            $browser->loginAs($admin)
                ->visit(route('admin.elencofotos.index'))
                ->click('tr[data-entry-id="' . $elencofoto->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='elenco']", $elencofoto->elenco->name)
                ->assertChecked("ativo");
        });
    }

}
