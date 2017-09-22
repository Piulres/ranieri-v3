<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class ElencoVideoTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCreateElencoVideo()
    {
        $admin = \App\User::find(1);
        $elenco_video = factory('App\ElencoVideo')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $elenco_video) {
            $browser->loginAs($admin)
                ->visit(route('admin.elenco_videos.index'))
                ->clickLink('Add new')
                ->select("elenco_id", $elenco_video->elenco_id)
                ->type("urlvideo", $elenco_video->urlvideo)
                ->uncheck("ativo")
                ->press('Save')
                ->assertRouteIs('admin.elenco_videos.index')
                ->assertSeeIn("tr:last-child td[field-key='elenco']", $elenco_video->elenco->name)
                ->assertSeeIn("tr:last-child td[field-key='urlvideo']", $elenco_video->urlvideo);
        });
    }

    public function testEditElencoVideo()
    {
        $admin = \App\User::find(1);
        $elenco_video = factory('App\ElencoVideo')->create();
        $elenco_video2 = factory('App\ElencoVideo')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $elenco_video, $elenco_video2) {
            $browser->loginAs($admin)
                ->visit(route('admin.elenco_videos.index'))
                ->click('tr[data-entry-id="' . $elenco_video->id . '"] .btn-info')
                ->select("elenco_id", $elenco_video2->elenco_id)
                ->type("urlvideo", $elenco_video2->urlvideo)
                ->uncheck("ativo")
                ->press('Update')
                ->assertRouteIs('admin.elenco_videos.index')
                ->assertSeeIn("tr:last-child td[field-key='elenco']", $elenco_video2->elenco->name)
                ->assertSeeIn("tr:last-child td[field-key='urlvideo']", $elenco_video2->urlvideo);
        });
    }

    public function testShowElencoVideo()
    {
        $admin = \App\User::find(1);
        $elenco_video = factory('App\ElencoVideo')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $elenco_video) {
            $browser->loginAs($admin)
                ->visit(route('admin.elenco_videos.index'))
                ->click('tr[data-entry-id="' . $elenco_video->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='elenco']", $elenco_video->elenco->name)
                ->assertSeeIn("td[field-key='urlvideo']", $elenco_video->urlvideo)
                ->assertChecked("ativo");
        });
    }

}
