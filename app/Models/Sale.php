<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = "sale";

    protected $fillable=[
        'img',
        'sale',
        'card_price',
        'price',
        'description',
        'star'
    ];
}
