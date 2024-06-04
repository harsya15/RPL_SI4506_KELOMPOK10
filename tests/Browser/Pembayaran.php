<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Pembayaran extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group test
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Menu')
                    ->assertPathIs('/menu');
        });
    }
}
