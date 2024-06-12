<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MenuTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group menu
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
                    ->assertSee('List Menu')
                    ->clickLink('List Menu')
                    ->assertSee('Tambah')
                    ->clickLink('Tambah')
                    ->type('nama', 'sate solo')
                    ->type('deskripsi', 'Campuran daging kambing balibul dan lemak yang dibakar dengan celupan bumbu kecap.')
                    ->select('kategori', 'sate')
                    ->type('harga', 20000)
                    ->attach('gambar', 'public/images/sate solo.jpg')
                    ->press('Tambah')
                    ->assertSee('Berhasil menambahkan menu sate solo')
                    ->assertSee('Ubah')
                    ->assertSee('Hapus')
                    ->press('Hapus')
                    ->acceptDialog();
        });
    }
}
