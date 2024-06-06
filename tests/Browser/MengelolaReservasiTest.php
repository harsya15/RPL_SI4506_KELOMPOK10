<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MengelolaReservasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Login')
                    ->clickLink('Login')
                    ->assertPathIs('/login')
                    ->type('email', 'davidtoreh12@gmail.com')
                    ->type('password', '12345678')
                    ->press('Login')
                    ->assertsee('Daftar Reservasi')
                    ->clickLink('Daftar Reservasi');
        });
    }
}
