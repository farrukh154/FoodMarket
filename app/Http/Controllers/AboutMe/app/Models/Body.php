<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Body extends Model
{
    use HasFactory;

    protected $table = "body";

    protected $fillable=[
        'title',
        'description',
    ];
}
