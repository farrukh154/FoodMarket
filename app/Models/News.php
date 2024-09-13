<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = "news";

    protected $fillable=[
        'img',
        'sale',
        'card_price',
        'price',
        'description',
        'star'
    ];
}
