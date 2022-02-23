<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $fillable = [
        'title',
        'image',
        'status',
    ];
}
