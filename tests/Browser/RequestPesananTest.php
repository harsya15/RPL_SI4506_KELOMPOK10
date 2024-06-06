<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RequestPesananTest extends DuskTestCase
{
    /**
     * A Dusk test example.
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
                    ->visitRoute('keranjang.index')
                    ->type('catatan', 'Banyakin bumbu kacang')
                    ->assertSee('Proceed to Checkout')
                    ->clickLink('Proceed to Checkout');
        });
    }
}
