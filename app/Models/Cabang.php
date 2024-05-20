<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    use HasFactory;

    protected $table = 'cabang_balibul';

    protected $fillable = [
        'id', 'cabang', 'alamat', 'kontak', 'created_at', 'updated_at'
    ];
}
