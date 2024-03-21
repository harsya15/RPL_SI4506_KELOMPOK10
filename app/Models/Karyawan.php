<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'data_karyawan';

    protected $fillable = [
        'id', 'nama', 'umur', 'email', 'alamat', 'created_at', 'updated_at'
    ];
}
