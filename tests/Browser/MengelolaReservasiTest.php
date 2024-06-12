<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MengelolaReservasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group mengelolareservasi
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Login')
                    ->clickLink('Login')
                    ->type('email', 'asep@gmail.com')
                    ->type('password', 'password')
                    ->press('Login')
                    ->assertsee('Daftar Reservasi')
                    ->clickLink('Daftar Reservasi')
                    ->assertSee('Nama Pemesan');
        });
    }
}
