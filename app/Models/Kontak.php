<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;
    //make insert data to mengakses_kontak
    protected $table = 'mengakses_kontak';
    protected $fillable = [
        'nama',
        'subjek',
        'pesan'
    ];


}