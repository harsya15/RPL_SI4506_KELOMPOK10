<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $table = 'rating_customers';

    protected $fillable = [
        'id', 'nama', 'rating', 'komentar', 'created_at','updated_at'
    ];
}
