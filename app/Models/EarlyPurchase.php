<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EarlyPurchase extends Model
{
    use HasFactory;

    protected $table = "early_purchase";

    protected $fillable=[
        'img',
        'sale',
        'card_price',
        'price',
        'description',
        'star'
    ];
}
