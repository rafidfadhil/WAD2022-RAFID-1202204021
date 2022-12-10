<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showrooms extends Model
{
    use HasFactory;

    protected $table = 'showrooms';

    protected $fillable = [
        'id_user',
        'name',
        'brand',
        'purchase_date',
        'description',
        'image',
        'status',
    ];

}
