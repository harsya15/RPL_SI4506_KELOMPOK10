<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

use function PHPSTORM_META\type;

class RequestPesananTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group request
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Login')
                    ->clickLink('Login')
                    ->type('email', 'davidtoreh12@gmail.com')
                    ->type('password', 'password')
                    ->press('Login')
                    ->visit('/keranjang')
                    ->type('alamat', 'sukapura')
                    ->type('no_hp', '0828228')
                    ->type('catatan', 'Banyakin bumbu kacang')
                    ->press('Proceed to Checkout');
        });
    }
}
