<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservasiModel extends Model
{
    use HasFactory;
    //make insert data to order_meja
    protected $table = 'order_meja';
    protected $fillable = [
        'no_meja',
        'atas_nama',
    ];


}
