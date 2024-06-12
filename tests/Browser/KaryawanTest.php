<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class KaryawanTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group karyawan
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Login')
                    ->clickLink('Login')
                    ->type('email', 'fidah@gmail.com')
                    ->type('password', 'password')
                    ->press('Login')
                    ->assertSee('Daftar Karyawan')
                    ->clickLink('Daftar Karyawan')
                    ->assertSee('Tambah')
                    ->clickLink('Tambah')
                    ->type('nama', 'asep')
                    ->type('umur', 20)
                    ->type('email', 'asep@gmail.com')
                    ->type('alamat', 'PBB')
                    ->type('jadwal', 'Senin - Kamis')
                    ->press('Tambah')
                    ->assertSee('asep');
        });
    }
}
