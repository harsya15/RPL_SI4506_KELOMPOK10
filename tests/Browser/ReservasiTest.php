<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ReservasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Reservation')
            ->type('no_meja', '10')
            ->type('atas_nama', 'John Doe')
            ->type('date', '2024-05-21')
            ->type('time', '18:30')
            ->type('jumlah_orang', '4')
            ->type('email', 'johndoe@example.com')
            ->press('Submit');
        });
    }
}
