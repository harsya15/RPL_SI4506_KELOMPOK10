<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ReservationTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group reservation
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Reservasi')
                    ->clickLink('Reservasi')
                    ->type('atas_nama', 'John Doe')
                    ->type('no_meja', '5')
                    ->type('date', '06/10/2024')
                    ->type('time', '19:00')
                    ->type('jumlah', '4')
                    ->type('email', 'davidtoreh12@gmail.com')
                    ->press('Reservasi Meja');
        });
    }
}