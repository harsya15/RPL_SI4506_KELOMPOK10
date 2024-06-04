<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    
    protected $table = 'keranjang';

    protected $fillable = [
        'id', 'nama_menu', 'deskripsi_menu', 'harga_menu', 'gambar_menu', 'jumlah', 'subtotal', 'created_at', 'updated_at'
    ];
}
