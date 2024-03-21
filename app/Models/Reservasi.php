<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasi';

    protected $fillable = [
        'id', 'nama_pemesan', 'tanggal_reservasi', 'jumlah_orang', 'created_at','updated_at'
    ];

}
