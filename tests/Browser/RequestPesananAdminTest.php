<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RequestPesananAdminTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group requestAdmin
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
                    ->assertSee('Daftar Pesanan')
                    ->clickLink('Daftar Pesanan')
                    ->assertSee('Belum Diterima');
        });
    }
}
