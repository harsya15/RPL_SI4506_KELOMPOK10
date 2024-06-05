<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;

    protected $table = 'data_pesanan';

    protected $fillable = [
        'id', 'nama_pemesan', 'email', 'list_menu', 'catatan', 'status', 'created_at', 'updated_at'
    ];

    protected $casts = [
        'list_menu' => 'array',
    ];
}
